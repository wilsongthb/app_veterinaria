@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <h3>Ubicacion de vacas en celo</h3>
        <iframe src="{{ url('/map') }}" width="640" height="480"></iframe>
    </div>
</div>
@endsection