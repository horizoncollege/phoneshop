@extends('layouts/appindex')

@section('content')

<div class="container m-1">
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

<div class="container d-flex col-8 text-center visible">
    <div class="container m-5 border">
        <h1>{{$telefoon->fabrikant}}</h1>
        <p>Model: {{$telefoon->model}}</p>
        <p>Aantal geheugen: {{$telefoon->geheugen}}</p>
        <p>Prijs: {{$telefoon->prijs}}</p>

        <p>kleur: {{$infos->kleur}}<br>
           Gewicht: {{$infos->gewicht}}<br>
            Besturingssysteem: {{$infos->besturingssysteem}}<br>
            Scherm: {{$infos->scherm}}<br>
            Schermgrootte: {{$infos->schermgrootte}}<br>
            Resolutie: {{$infos->resolutie}}<br>
            Camera's: {{$infos->cameras}}<br>
            Aantal camera's: {{$infos->aantalcameras}}<br>
            Werkgeheugen: {{$infos->werkgeheugen}}<br>
            Batterij: {{$infos->batterij}}<br>
            Draadloos: {{$infos->draadloos}}<br>
            Vingerafdrukscanner: {{$infos->vingerafdrukscanner}}<br>
            Netwerk: {{$infos->netwerk}}<br>
            Introductiejaar: {{$infos->introductiejaar}}</p>
        <a href="/" class="btn btn-secondary m-2">Back to home page</a>
    </div>
</div>

@endsection
