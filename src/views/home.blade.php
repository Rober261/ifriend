@extends('master')

@section('title','Bievenido a Ifriend')
@section('content')
    <h2>Tu gestor del amigo invisible</h2>
    @isset($_SESSION['id'])
    <a href="/user" class="btn btn-primary"> Listado de usuarios</a>
    @endisset
@endsection