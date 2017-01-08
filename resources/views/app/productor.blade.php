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
    </div>
</div>
@endsection