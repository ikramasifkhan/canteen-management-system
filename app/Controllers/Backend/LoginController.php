<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use Respect\Validation\Validator as v;
use App\Models\User;
use Carbon\Carbon;

class LoginController extends BaseController{
    public function getIndex(){
        $this->view('backend/login');
    }

    public function getActivate(){
        $token = $_GET['token'];
        echo $token;
        die;
        if(empty($token)){
            $errors['token']='Your token is empty';
            $_SESSION['errors']=$errors;
            header('Location: /register');
        }else{
            $user = User::where('email_verification_token', $token) ->first();
            if($user){
                $user->update([
                    'email_verified_at'=>Carbon::now(),
                    'email_verification_token'=>null
                ]);
                $_SESSION['success']='Your account has been activated now login here';
                header('Location:/login');
            }else{
                header('Location:/register');
            }
        }
    }

    public function postIndex(){
        $errors=[];
        $email = $_POST['email'];
        $password = $_POST['password'];

       if(v::email()->validate($email)==false){
            $errors['email']= 'You must enter an valid email address';
       }

       if(strlen($password)<6){
            $errors['password']='Password should be at least 6 chararecters';
       }

       if(empty($errors)){
            $users = User::select([
                'id', 'password', 'username', 'email'
            ])
            ->where('email', $email)
            ->first();
            
            if($users){
                if(password_verify($password, $users->password)==true){
                    $_SESSION['success']='Login successful';
                    header('Location:/register');
                }else{
                    $errors['password']='Password does not match';
                    $_SESSION['errors']=$errors;
                    header('Location:/login');
                }
            }else{
                $errors['email']='Email address you entered does not match our record';
                $_SESSION['errors']=$errors;
                header('Location:/login');
            }
       
       }
    }
}
