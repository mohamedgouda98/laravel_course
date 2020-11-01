<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{

    public function data($status){

        if($status == 1){
            return 'true';
        }

        return 'false';
    }






}
