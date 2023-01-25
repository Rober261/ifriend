@extends('master')

@section('title','Crear Usuario')
@section('content')
    <h2>Datos del nueva partida:</h2>
    <form method="POST" action="/party">
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <h3>Participantes</h3>
        @foreach ($users as $user)
        <span class="m-3">
          <input type="checkbox" name="participants[]" id="user{{$user->id}}" value="{{$user->id}}">
          <label for="user{{$user->id}}">{{$user->name}}</label>
        </span>        
      @endforeach
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
    @endsection
