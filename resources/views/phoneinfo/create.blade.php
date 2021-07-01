@extends('layouts/app')

@section('content')
<form class="h-100" method="post" action="{{ route('phoneinfo.store') }}">
    <div class="form-group">
        @csrf
        <label>kleur</label>
        <input type="text" class="form-control" name="kleur" />
    </div>
    <div class="form-group">
        <label>gewicht</label>
        <input type="text" class="form-control" name="gewicht" />
    </div>
    <div class="form-group">
        <label>besturingssysteem</label>
        <input type="text" class="form-control" name="besturingssysteem" />
    </div>
    <div class="form-group">
        <label>scherm</label>
        <input type="text" class="form-control" name="scherm" />
    </div>
    <div class="form-group">
        <label>schermgrootte</label>
        <input type="text" class="form-control" name="schermgrootte" />
    </div>
    <div class="form-group">
        <label>resolutie</label>
        <input type="text" class="form-control" name="resolutie" />
    </div>
    <div class="form-group">
        <label>cameras</label>
        <input type="text" class="form-control" name="cameras" />
    </div>
    <div class="form-group">
        <label>aantalcameras</label>
        <input type="text" class="form-control" name="aantalcameras" />
    </div>
    <div class="form-group">
        <label>werkgeheugen</label>
        <input type="text" class="form-control" name="werkgeheugen" />
    </div>
    <div class="form-group">
        <label>batterij</label>
        <input type="text" class="form-control" name="batterij" />
    </div>
    <div class="form-group">
        <label>draadloos</label>
        <input type="text" class="form-control" name="draadloos" />
    </div>
    <div class="form-group">
        <label>vingerafdrukscanner</label>
        <input type="text" class="form-control" name="vingerafdrukscanner" />
    </div>
    <div class="form-group">
        <label>netwerk</label>
        <input type="text" class="form-control" name="netwerk" />
    </div>
    <div class="form-group">
        <label>introductiejaar</label>
        <input type="text" class="form-control" name="introductiejaar" />
    </div>
    <div class="form-group">
        <label>telefoons_id</label>
        <input type="text" class="form-control" name="telefoons_id" />
    </div>

    <button type="submit" class="btn btn-primary">Toevoegen</button>
    <a href="./" class="btn btn-danger">Annuleren</a>
</form>
@endsection
