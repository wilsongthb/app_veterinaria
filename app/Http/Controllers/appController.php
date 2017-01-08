<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

function resumen_ganado($productor_id){
    return [
        'Total' => DB::table('ganado')->select(DB::raw('count("id") as "total"'))->where('productor_id', $productor_id)->get()[0]->total,
        'Vacas' => DB::table('ganado')->select(DB::raw('count("id") as "total"'))->where('productor_id', $productor_id)->Where('sexo', 'V')->get()[0]->total,
        'Toros' => DB::table('ganado')->select(DB::raw('count("id") as "total"'))->where('productor_id', $productor_id)->Where('sexo', 'T')->get()[0]->total,
        'En celo' => DB::table('ganado')->select(DB::raw('count("id") as "total"'))->where('productor_id', $productor_id)->Where('estado', 'celo')->get()[0]->total,
        'Preñadas' => DB::table('ganado')->select(DB::raw('count("id") as "total"'))->where('productor_id', $productor_id)->Where('estado', 'preñada')->get()[0]->total
    ];
}
function productor_id(){
    return DB::table('productor')->select('id')->where('users_id', Auth::user()->id)->get()[0]->id;
}

class appController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index () {
        $ganado = resumen_ganado(productor_id());
        $celo = DB::table('ganado')
            ->select('*')
            ->where('estado', 'celo')
            ->where('productor_id', productor_id())
            ->get();
        return view('app.inicio', ['resumen_ganado' => $ganado, 'celo' => $celo]);
    }
    public function productor () {
        $productor = DB::table('productor')->select('*')
            ->where('users_id', Auth::user()->id)
            ->get()[0];//obtener el primero
            $ganado = resumen_ganado($productor->id);
        // return "<pre>".print_r($ganado, true);
        return view('app.productor', ['productor' => $productor, 'ganado' => $ganado]);
    }
    public function catalogo () {
        $catalogo = DB::table('ganado')
            ->select('*')
            ->where('productor_id', productor_id())
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
        $productor = DB::table('productor')
            ->select('*')
            ->where('users_id', Auth::user()->id)
            ->get()[0];//obtener el primero
        return view('app.ganado', [
            'ganado' => $ganado, 
            'incidencias' => $incidencias, 
            'productor' => $productor
        ]);
    }
    public function ayuda() {
        return view('app.ayuda');
    }
}