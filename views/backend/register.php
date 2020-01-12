<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin panel register</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php path_finder('backend') ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php path_finder('backend') ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php path_finder('backend') ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php path_finder('backend') ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php path_finder('backend') ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php path_finder('backend') ?>assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="/register">
                        <img class="align-content" src="<?php path_finder('backend') ?>images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <?php
                        require_once __DIR__.'../../partials/_notification.php';
                    ?>
                    <form action="/register" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username" placeholder="User Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label>Profile photo</label>
                            <input type="file" class="form-control" name="profile_photo" placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="/login"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php path_finder('backend') ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php path_finder('backend') ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php path_finder('backend') ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php path_finder('backend') ?>assets/js/main.js"></script>
</body>

</html>