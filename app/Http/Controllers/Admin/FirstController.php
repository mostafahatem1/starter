<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('mostafa');
    }


    function mostafa(){
        return "mostafa ggg";
    }
}
