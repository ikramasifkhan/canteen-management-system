<?php

namespace App\Controllers;


class BaseController {
    public function view($views='home'){
        require_once  __DIR__.'../../../views/'.$views.'.php';
    }
}
