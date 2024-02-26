<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControl extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
