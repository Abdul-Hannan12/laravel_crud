<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin (){
        echo 'Signed in successfully';
    }

    public function signup (){
        echo 'Account Created Successfully';
    }
}
