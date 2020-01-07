<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> E-Shopper
            <?php
            if (isset($title)) {
                if ($title == 'cart') {
                    echo 'cart';
                } elseif ($title == 'checkout') {
                    echo 'checkout';
                } elseif ($title == 'product_details') {
                    echo 'product_details';
                } elseif ($title == 'contact') {
                    echo 'contact';
                }
            } else {
                echo 'home';
            }
            ?>
        </title>
        <link href="<?php path_finder() ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php path_finder() ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php path_finder() ?>css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php path_finder() ?>css/price-range.css" rel="stylesheet">
        <link href="<?php path_finder() ?>css/animate.css" rel="stylesheet">
        <link href="<?php path_finder() ?>css/main.css" rel="stylesheet">
        <link href="<?php path_finder() ?>css/responsive.css" rel="stylesheet">       
        <link rel="shortcut icon" href="<?php path_finder() ?>images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php path_finder() ?>images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php path_finder() ?>images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php path_finder() ?>images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php path_finder() ?>images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>


        <?php partials('Frontend/_header'); ?>

        <?php
        if (isset($pages)) {
            if ($pages == 'product_details') {
                include __DIR__ . '/../pages/product_details_content.php';
            } elseif ($pages == 'cart') {
                include __DIR__ . '/../pages/cart_content.php';
            } elseif ($pages == 'checkout') {
                include __DIR__ . '/../pages/checkout_content.php';
            }elseif ($pages=='contact') {
                include __DIR__ . '/../pages/contact_content.php';
            }
        } else {
            include __DIR__ . '/../pages/home_page.php';
        }
        ?>

        <?php partials('Frontend/_footer') ?>



        <script src="<?php path_finder() ?>js/jquery.js"></script>
        <script src="<?php path_finder() ?>js/bootstrap.min.js"></script>
        <script src="<?php path_finder() ?>js/jquery.scrollUp.min.js"></script>
        <script src="<?php path_finder() ?>js/price-range.js"></script>
        <script src="<?php path_finder() ?>js/jquery.prettyPhoto.js"></script>
        <script src="<?php path_finder() ?>js/main.js"></script>
    </body>
</html>
