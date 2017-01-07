<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function index () {
        return view('app.inicio');
    }
    public function productor () {
        return view('app.inicio');
    }
    
}
