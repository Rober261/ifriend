@extends('master')

@section('title','Detalle de '. $user->name)
@section('content')
    <h2>{{$user->password}}</h2>
    
    <div class="row">
        <a href="/user/{{$user->id}}/edit" class="btn btn-secondary"> Editar</a>
        <form action="/user/{{$user->id}}" method="POST">
        <input type="hidden" name="_METHOD" value="DELETE">
        <input type="submit" value="Borrar" class="btn btn-primary mt-2">
    </form>
        <a href="/user" class="btn btn-primary mt-2"> Listado de usuarios</a>    
    </div>
@endsection