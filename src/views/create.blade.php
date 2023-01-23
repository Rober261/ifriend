@extends('master')

@section('title','Crear Usuario')
@section('content')
    <h2>Datos del nuevo usuario:</h2>
    <form method="POST" action="/user">
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    @endsection
