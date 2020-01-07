<?php



namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class CartController extends BaseController{
    public function getIndex(){
        $this->view('frontend/cart');
    }
}
