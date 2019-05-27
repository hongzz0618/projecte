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
<h1 id="h1">Staff de la empresa<h1>
<div class="row">
<div class="col-xs-6 col-sm-8 col-md-12 text-center">

<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">codi</th>
      <th scope="col">Nombre</th>
      <th scope="col">tipostaff</th>
      <th scope="col">horario de trabajo</th>
    </tr>
  </thead>
  <tbody>

@foreach( $arrayStaffs as $key => $usu )

 
 <tr>
      <th scope="row">{{$usu['id']}}</th>
      <td><a href="{{ url('/Staff/show/' . $usu['id']) }}">{{$usu['nombre']}}</a></td>
      <td>{{$usu['tipostaff']}}</td>
      <td>{{$usu['horadetrabajo']}}</td>
    </tr>

@endforeach
</tbody>
</table>
</div>
</div>
@stop