@extends('master')

@section('title','Modificar Usuario')
@section('content')
    <h2>Datos del nuevo usuario a modificar:</h2>
    <form method="POST" action="/user/{{$user->id}}">
      <input type="hidden" name="_METHOD" value="PUT">
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name='name' value="{{$user->name}}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" value="{{$user->password}}"class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@endsection