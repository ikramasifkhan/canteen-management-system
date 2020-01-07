<?php


namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class CheckoutController extends BaseController{
    
    public function getIndex(){
        $this->view('frontend/checkout');
    }
    
}
