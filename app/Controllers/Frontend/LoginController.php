<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class LoginController extends BaseController{
    public function getIndex(){
        $this->view('frontend/login');
    }
}
