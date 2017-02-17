<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Index Action
     */
    public function index(){
//        throw new \Exception("ERROR HERE", 1);
        return view('welcome');
    }
}
