@extends('master')

@section('title','Partida con id: Mira la url')
@section('content')
    <h2>Asignación de regalos</h2>
    
    <div class="row">  
      @foreach ($parties as $party)
          {{-- @foreach ($party as $pa)
              {{$pa}}
          @endforeach --}}
          <h1>{{$party->user_to}}->{{$party->user_from}}</h1>
      @endforeach
        <a href="/party" class="btn btn-primary mt-2"> Volver Atras</a>    
    </div>
@endsection