@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Productor: <small>{{ $productor->nombre }}</small></h4>
        </div>
    </div>
    <div class="row">
        @if(count($incidencias) != 0)
            <div class="col-md-4">
                <h4>Incidencias</h4>
                @foreach($incidencias as $fila)
                    <table class="table table-bordered">
                        @foreach($fila as $clave => $item)
                            <tr>
                                <th>{{ $clave }}</th>
                                <td>{{ $item }}</td>
                            </tr>
                        @endforeach
                    </table>
                @endforeach
            </div>
        @endif
        <div class="col-md-4">
            <h4>Ganado</h4>
            <table class="table table-bordered">
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