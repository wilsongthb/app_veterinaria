@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8">
        <h3>Informacion del Productor</h3>
        <table class="table table-bordered">
            @foreach($productor as $clave => $item)
                <tr>
                    <th>{{ $clave }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </table>
        <a href="#">
            <button class="btn btn-success">Editar</button>
        </a>
    </div>
    <div class="col-md-4">
        <h3>Ganado</h3>
        <table class="table table-bordered">
            @foreach($ganado as $clave => $item)
                <tr>
                    <th>{{ $clave }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection