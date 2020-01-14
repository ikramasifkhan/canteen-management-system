<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use Respect\Validation\Validator as v;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class RegisterController extends BaseController
{

    public function getIndex()
    {
        $this->view('backend/register');
    }


    public function postIndex()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $profile_photo = $_FILES['profile_photo'];
        $token = sha1($username . $email . uniqid('token', true));

        if (v::alnum()->validate($username) == false) {
            $errors['username'] = 'User name must be number and digists';
        }
        if (strlen($username) < 6) {
            $errors['username'] = 'User name must at least 6 character or digists';
        }
        if (v::email()->validate($email) == false) {
            $errors['username'] = 'Please enter an valid email address';
        }
        if (strlen($password) < 6) {
            $errors['password'] = 'Password length must have 6 characters';
        }
        if (v::image()->validate($profile_photo['name'])) {
            $errors['profile_photo'] = 'Please provide an valid image';
        }
        if (v::size(null, '2GB')->validate($profile_photo['name']) == false) {
            $errors['size'] = 'File size too large';
        }
        if (empty($errors)) {
            $file_name = 'profile_photo' . time();
            $file_extension = pathinfo($profile_photo['name'], PATHINFO_EXTENSION);
            $temp_name = $profile_photo['tmp_name'];
            $directory = 'media/profile_photo/' . $file_name . '.' . $file_extension;
            move_uploaded_file($temp_name, $directory);

            User::create([
                'username' => $username,
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                'profile_photo' => $file_name . '.' . $file_extension,
                'email_verification_token' => $token,
            ]);

            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 2;                    
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.mailtrap.io';                    
                $mail->SMTPAuth   = true;                                  
                $mail->Username   = '5d4484ad751100';                    
                $mail->Password   = 'd6353fc2813646';                               
                $mail->SMTPSecure = 'TLS ';        
                $mail->Port       = 2525;                                
                
                $mail->setFrom('eshopper@gmail.com', 'System user');
                $mail->addAddress($email, $username);     
                
                $mail->isHTML(true);                                  
                $mail->Subject = 'Registration successful';
                $mail->Body    = 'Hi '.$username.' Please click here to active your account<br>
                <a href="http://localhost/activate?token='.$token.'">Click here</a>';
            
                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            $_SESSION['success'] = 'Registration successful';
            header('Location: /login');
        } else {
            $_SESSION['errors'] = $errors;
            header('Location: /register');
        }
    }
}
