<?php

if(!function_exists('path_finder')){
    function path_finder($folder_name = 'frontend'){
      echo  BASE_PATH.'assests/'.$folder_name.'/';
    }
}

if(!function_exists('partials')){
    function partials($location='index'){
        require_once __DIR__.'/../views/partials/'.$location.'.php';
    }
}