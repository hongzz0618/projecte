<style>
    img{
        width:256px;
        height:171px;
        
    }
    body{
        background-color: #C6C3C3;
    }
    #h1{
        margin-bottom: 100px;
    }
    
</style>
@extends('layouts.master')
@section('content')
<style>
    img{
        width:256px;
        height:171px;
        
    }
    body{
        background-color: #C6C3C3;
    }
    #h1{
        margin-bottom: 100px;
    }
    
</style>
<h1 id="h1">Usuarios Registrados<h1>
<div class="row">
<div class="col-xs-6 col-sm-8 col-md-12 text-center">
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">codi</th>
      <th scope="col">Nombre</th>
      <th scope="col">email</th>
      <th scope="col">direccion</th>
      <th scope="col">telefono</th>
    </tr>
  </thead>
  <tbody>

@foreach( $arrayClientes as $key => $usu )
<tr>
      <th scope="row">{{$usu['id']}}</th>
      <td><a href="{{ url('/editorial/show/' . $usu['id']) }}">{{$usu['nombre']}}</a></td>
      <td>{{$usu['email']}}</td>
      <td>{{$usu['direccion']}}</td>
      <td>{{$usu['telefono']}}</td>
    </tr>

 @endforeach

 </tbody>
</table>


</div>

</div>
@stop