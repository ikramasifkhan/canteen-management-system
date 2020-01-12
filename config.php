<?php

define('BASE_PATH', 'http://localhost/');

 use Illuminate\Database\Capsule\Manager as Capsule;
 
 $capsule = new Capsule;
 
 $capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'e-shoper',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();


$capsule->bootEloquent();

$users = Capsule::table('users')->get();
