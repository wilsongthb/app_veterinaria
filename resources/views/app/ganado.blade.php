@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Productor: <small>{{ $productor->nombre }}</small></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4>Incidencias</h4>
            <a href="#">
                <button class="btn btn-success">Registra Nuevo Incidente</button>
            </a>
            @foreach($incidencias as $fila)
                <table class="table table-bordered" style="margin-top: 22px">
                    @foreach($fila as $clave => $item)
                        <tr>
                            <th>{{ $clave }}</th>
                            <td>{{ $item }}</td>
                        </tr>
                    @endforeach
                </table>
            @endforeach
        </div>
        <div class="col-md-4">
            <h4>Ganado</h4>
            <a href="#">
                <button class="btn btn-success">Editar</button>
            </a>
            <table class="table table-bordered" style="margin-top: 22px">
                <tr>
                    <td colspan="2">
                        <img src="{{ url($ganado->imagen) }}" alt="default">
                    </td>
                </tr>
                @foreach($ganado as $clave => $item)
                    <tr>
                        <th>{{ $clave }}</th>
                        <td>{{ $item }}</td>
                    </tr>
                @endforeach
            </table>            
        </div>
        <div class="col-md-4">
            <h4>Ubicacion</h4>
            <iframe src="{{ url('/map') }}" width="100%" height="400"></iframe> 
        </div>
    </div>
</div>
@endsection