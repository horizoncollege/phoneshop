@extends('layouts/app')

@section('content')
<table class="table">

    <thead>
    <tr>
        <td>
            <a class="btn btn-secondary" href="{{ route('telefoons.create') }}">create</a>
            <td><a href="{{ route('phoneinfo.index') }}" class="btn btn-secondary">Info</a> </td>
            <td><a href="{{ route('phoneinfo.create') }}"  class="btn btn-secondary">Add Info</a> </td>
        </td>
    </tr>
    <tr>
        <td>id</td>
        <td>Fabrikant</td>
        <td>Model</td>
        <td>Geheugen</td>
        <td>Prijs</td>
        <td>Info</td>
        <td>Add extra info</td>
        <td>Actie</td>
        <td>Remove</td>
    </tr>
    </thead>
    <tbody>
    @foreach($telefoons as $telefoon)
    <tr>
        <td>{{$telefoon->id}}</td>
        <td>{{$telefoon->fabrikant}}</td>
        <td>{{$telefoon->model}}</td>
        <td>{{$telefoon->geheugen}}</td>
        <td>{{$telefoon->prijs}}</td>
        <td><a href="{{ route('phoneinfo.index', $telefoon->id) }}" class="btn btn-secondary">Info</a> </td>
        <td><a href="{{ route('phoneinfo.edit',  $telefoon->telefoons_id) }}"  class="btn btn-secondary">Add Info</a> </td>
        <td><a href="{{ route('telefoons.edit', $telefoon->id)}}" class="btn btn-primary">Wijzig</a></td>
        <td>
            <form action="{{ route('telefoons.destroy', $telefoon->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Verwijder</button>
            </form>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>

@endsection
