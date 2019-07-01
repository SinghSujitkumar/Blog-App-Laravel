@extends('layouts.app');
@section('content');
    <h2>Profile</h2>
    <br><br>
    @foreach($infos as $info)
    <div class="well">
        <h3><a href="/infos/{{$info->id}}">{{$info->name}}</a></h3>
        <small>Writer Since{{$info->created_at}}</small>
    </div>
    
     @endforeach
@endsection();