@extends('layouts/appindex')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">

            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link btn-primary" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-primary" href="telefoons">Add Phone</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container h-25 d-flex align-content-center">
    @foreach($telefoons as $telefoon)
    <div class="container m-5 border">
        <h1>{{$telefoon->fabrikant}}</h1>
        <p>Model: {{$telefoon->model}}</p>
        <p>Aantal geheugen: {{$telefoon->geheugen}}</p>
        <p>Prijs: {{$telefoon->prijs}}</p>
        <p class="btn btn-secondary"><a href="{{ route('extrainfo', $telefoon->id) }}" class="btn btn-secondary"> more Info</a></p>
    </div>
    @endforeach
</div>

@endsection
