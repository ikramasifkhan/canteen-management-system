<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login | E-Shopper</title>
        <link href="" rel="stylesheet">
        <link href="<?php path_finder()?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php path_finder()?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php path_finder()?>css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php path_finder()?>css/price-range.css" rel="stylesheet">
        <link href="<?php path_finder()?>css/animate.css" rel="stylesheet">
        <link href="<?php path_finder()?>css/main.css" rel="stylesheet">
        <link href="<?php path_finder()?>css/responsive.css" rel="stylesheet">    
        <link rel="shortcut icon" href="<?php path_finder()?>images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php path_finder()?>images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php path_finder()?>images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php path_finder()?>images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php path_finder()?>images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        

        <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>Login to your account</h2>
                            <form action="#">
                                <input type="text" placeholder="Name" />
                                <input type="email" placeholder="Email Address" />
                                <span>
                                    <input type="checkbox" class="checkbox"> 
                                    Keep me signed in
                                </span>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>New User Signup!</h2>
                            <form action="#">
                                <input type="text" placeholder="Name"/>
                                <input type="email" placeholder="Email Address"/>
                                <input type="password" placeholder="Password"/>
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form>
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->


        

        <script src="<?php path_finder()?>js/jquery.js"></script>
        <script src="<?php path_finder()?>js/price-range.js"></script>
        <script src="<?php path_finder()?>js/jquery.scrollUp.min.js"></script>
        <script src="<?php path_finder()?>js/bootstrap.min.js"></script>
        <script src="<?php path_finder()?>js/jquery.prettyPhoto.js"></script>
        <script src="<?php path_finder()?>js/main.js"></script>
    </body>
</html>