<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class ProductDetailsController extends BaseController{
    public function getIndex(){
        $this->view('frontend/product_details');
    }
}
