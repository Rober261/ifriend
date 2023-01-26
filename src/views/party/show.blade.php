@extends('master')

@section('title','Partida con id: Mira la url')
@section('content')
    <h2>Asignación de regalos</h2>
    
    <div class="row">
      
      <h6>Id usuarios</h6>  
      @foreach ($parties as $party)
          <h1>
            {{$party->user_from}}->{{$party->user_to}}
            {{-- @foreach ($users as $user)
              
              // echo "vuelta";
              // if ($party->user_from === $user->id) {
              //   echo  "[" . $user->name . "]" ;
              // }else{
              //   echo $user->id;
              // }
              // if ($party->user_to === $user->id) {
              //   echo "{". $user->name . "}";
              // }
            
            @endforeach --}}

          </h1>
      @endforeach
        <a href="/party" class="btn btn-primary mt-2"> Volver Atras</a>    
    </div>
@endsection