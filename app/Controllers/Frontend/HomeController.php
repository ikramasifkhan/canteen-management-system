<?php


namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
class HomeController extends BaseController{
    public function getIndex(){
        $this->view('frontend/home');
    }
}
