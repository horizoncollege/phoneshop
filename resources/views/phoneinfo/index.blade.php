@extends('layouts/app')

@section('content')

<table class="table">
    <thead>
    <tr>
        <td>
            <a class="btn btn-secondary" href="{{ route('phoneinfo.create') }}">create</a>
        </td>
        <td>
            <a class="btn btn-secondary" href="{{ route('telefoons.index') }}">telefoons</a>
        </td>
    </tr>
    <tr>
        <td>kleur</td>
        <td>gewicht</td>
        <td>besturingssysteem</td>
        <td>scherm</td>
        <td>schermgrootte</td>
        <td>resolutie</td>
        <td>cameras</td>
        <td>aantalcameras</td>
        <td>werkgeheugen</td>
        <td>batterij</td>
        <td>draadloos</td>
        <td>vingerafdrukscanner</td>
        <td>netwerk</td>
        <td>introductiejaar</td>
        <td>phone id</td>
        <td>actie</td>
        <td>remove</td>
    </tr>
    </thead>
    <tbody>
    @foreach($infos as $info)
    <tr>
        <td>{{$info->kleur}}</td>
        <td>{{$info->gewicht}}</td>
        <td>{{$info->besturingssysteem}}</td>
        <td>{{$info->scherm}}</td>
        <td>{{$info->schermgrootte}}</td>
        <td>{{$info->resolutie}}</td>
        <td>{{$info->cameras}}</td>
        <td>{{$info->aantalcameras}}</td>
        <td>{{$info->werkgeheugen}}</td>
        <td>{{$info->batterij}}</td>
        <td>{{$info->draadloos}}</td>
        <td>{{$info->vingerafdrukscanner}}</td>
        <td>{{$info->netwerk}}</td>
        <td>{{$info->introductiejaar}}</td>
        <td>{{$info->telefoons_id}}</td>
        <td><a href="{{ route('phoneinfo.edit',$info->id) }}" class="btn btn-primary">wijzig</a> </td>
        <td>
            <form action="{{ route('phoneinfo.destroy', $info->id)}}" method="post">
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
