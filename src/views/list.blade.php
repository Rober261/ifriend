@extends('master')

@section('title','Listado de usuarios')
@section('content')
<a href="/user/create" class="btn btn-warning">Crear Usuario</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->password}}</td>
      <td><a href="/user/{{$user->id}}" class="btn btn-success">Mostrar Usuario</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
