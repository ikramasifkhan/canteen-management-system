<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
class ContactController extends BaseController{
    public function getIndex(){
        $this->view('frontend/contact');
    }
}
