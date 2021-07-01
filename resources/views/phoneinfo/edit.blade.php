@extends('layouts/app')

@section('content')
<form class="h-100" method="post" action="{{ route('telefoons.update', $infos->id) }}">
    <div class="form-group">
        @csrf
        <label>kleur</label>
        <input type="text" class="form-control" name="kleur" value="{{$infos->kleur}}" />
    </div>
    <div class="form-group">
        <label>gewicht</label>
        <input type="text" class="form-control" name="gewicht" value="{{$infos->gewicht}}" />
    </div>
    <div class="form-group">
        <label>besturingssysteem</label>
        <input type="text" class="form-control" name="besturingssysteem" value="{{$infos->besturingssysteem}}" />
    </div>
    <div class="form-group">
        <label>scherm</label>
        <input type="text" class="form-control" name="scherm" value="{{$infos->scherm}}" />
    </div>
    <div class="form-group">
        <label>schermgrootte</label>
        <input type="text" class="form-control" name="schermgrootte" value="{{$infos->schermgrootte}}" />
    </div>
    <div class="form-group">
        <label>resolutie</label>
        <input type="text" class="form-control" name="resolutie" value="{{$infos->resolutie}}" />
    </div>
    <div class="form-group">
        <label>cameras</label>
        <input type="text" class="form-control" name="cameras" value="{{$infos->camers}}" />
    </div>
    <div class="form-group">
        <label>aantalcameras</label>
        <input type="text" class="form-control" name="aantalcameras" value="{{$infos->aantalcameras}}" />
    </div>
    <div class="form-group">
        <label>werkgeheugen</label>
        <input type="text" class="form-control" name="werkgeheugen" value="{{$infos->werkgeheugen}}" />
    </div>
    <div class="form-group">
        <label>batterij</label>
        <input type="text" class="form-control" name="batterij" value="{{$infos->batterij}}" />
    </div>
    <div class="form-group">
        <label>draadloos</label>
        <input type="text" class="form-control" name="draadloos" value="{{$infos->draadloos}}" />
    </div>
    <div class="form-group">
        <label>vingerafdrukscanner</label>
        <input type="text" class="form-control" name="vingerafdrukscanner" value="{{$infos->vingerafdrukscanner}}" />
    </div>
    <div class="form-group">
        <label>netwerk</label>
        <input type="text" class="form-control" name="netwerk" value="{{$infos->netwerk}}" />
    </div>
    <div class="form-group">
        <label>introductiejaar</label>
        <input type="text" class="form-control" name="introductiejaar" value="{{$infos->introductiejaar}}" />
    </div>

    <div class="form-group">
        <label>telefoons_id</label>
        <input type="text" class="form-control" name="introductiejaar" value="{{$infos->telefoons_id}}" />
    </div>

    <button type="submit" class="btn btn-primary">Wijzigen</button>
    <a href="../" class="btn btn-danger">Annuleren</a>
</form>
@endsection
