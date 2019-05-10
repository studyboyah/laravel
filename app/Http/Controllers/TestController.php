<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
    	echo 0.1;
        if (0.1+0.2===0.3) {
        	echo 1;
        }else{
        	echo 2;
        }
    }
}
