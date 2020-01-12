<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;
class LoginController extends BaseController{
    public function getIndex(){
        $this->view('backend/login');
    }
}
