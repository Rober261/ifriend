@extends('master')

@section('title','Login')
@section('content')
    <h2>Datos de validacion:</h2>
    <form method="POST" action="/login">
      <div class="mb-3">
        <label for="" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Validar</button>
    </form>
    @endsection
