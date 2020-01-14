<?php

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\RouteParser;



$router = new RouteCollector(new RouteParser());


$router->controller('/', App\Controllers\Frontend\HomeController::class);
$router->controller('/product-details', App\Controllers\Frontend\ProductDetailsController::class);
$router->controller('/checkout', App\Controllers\Frontend\CheckoutController::class);
$router->controller('/cart', App\Controllers\Frontend\CartController::class);
$router->controller('/contact', App\Controllers\Frontend\ContactController::class);
$router->controller('/login', App\Controllers\Backend\LoginController::class);
$router->controller('/activate', App\Controllers\Backend\LoginController::class);
$router->controller('/register', App\Controllers\Backend\RegisterController::class);


try {
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    echo $response;
} catch (HttpRouteNotFoundException $exc) {
    echo $exc->getMessage();
} catch (HttpMethodNotAllowedException $exc) {
    echo $exc->getMessage();
}

