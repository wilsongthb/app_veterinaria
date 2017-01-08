@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="text-center">CATALOGO DEL PRODUCTOR</h3>
        @foreach($catalogo as $ganado)
            <div class="col-md-3">
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
                </table>
            </div>
        @endforeach
    </div>
</div>
@endsection