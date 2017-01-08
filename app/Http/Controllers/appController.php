<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function index () {
        return view('app.inicio');
    }
    public function productor () {
        $productor = [
            'id' => 6532,
            'Nombre' => 'ANGEL VILCA APAZA',
            'dni' => '',
            'nacimiento' => '15/08/1991',
            'distrito' => 'ATUNNCOLLA',
            'telefono' => '972651131'
        ];
        return view('app.productor', ['productor' => $productor]);
    }
    public function catalogo () {
        $catalogo =  [];
        return view('app.catalogo', ['catalogo' => $catalogo]);
    }
}