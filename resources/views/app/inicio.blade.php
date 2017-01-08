@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <h3>Ubicacion de vacas en celo</h3>
                <iframe src="{{ url('/map') }}" width="640" height="480"></iframe>
            </div>
            <div class="row">
                <h3>Resumen Ganado</h3>
                <table class="table table-bordered">
                    @foreach($resumen_ganado as $clave => $item)
                        <tr>
                            <th>{{ $clave }}</th>
                            <td>{{ $item }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-md-4">
                <h3>Vacas en celo</h3>
                @foreach($celo as $ganado)
                    <div class="row">
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="2">
                                    <a href="{{ url('/ganado/'.$ganado->id) }}">
                                        <img src="{{ url($ganado->imagen) }}" alt="default">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <td>{{ $ganado->nombre }}</td>
                            </tr>
                            <tr>
                                <th>Ubicacion</th>
                                <td>{{ $ganado->ubicacion }}</td>
                            </tr>
                        </table>
                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection