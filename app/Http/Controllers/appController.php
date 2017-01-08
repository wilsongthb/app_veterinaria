<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class appController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index () {
        return view('app.inicio');
    }
    public function productor () {
        $productor = DB::table('productor')->select('*')
            ->where('users_id', Auth::user()->id)
            ->get()[0];//obtener el primero
        return view('app.productor', ['productor' => $productor]);
    }
    public function catalogo () {
        $catalogo = DB::table('ganado')->select('*')
            ->where('productor_id', Auth::user()->id)
            ->get();
        return view('app.catalogo', ['catalogo' => $catalogo]);
    }
    public function ganado ($id) {
        $ganado = DB::table('ganado')
            ->select('*')
            ->where('id', $id)
            ->get()[0];
        $incidencias = DB::table('historial_ganado')
            ->select('*')
            ->where('ganado_id', $id)
            ->get();
        $productor = DB::table('productor')->select('*')
            ->where('users_id', Auth::user()->id)
            ->get()[0];//obtener el primero
        return view('app.ganado', [
            'ganado' => $ganado, 
            'incidencias' => $incidencias, 
            'productor' => $productor
        ]);
    }
}