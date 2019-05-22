<style>
    body{
        background-color: #C6C3C3;
    }
img{
    width:440px;
    height:220px;
}
body{
        background-color: #C6C3C3;
    }
#a{
    
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 25px;
    font-style: italic;
    color: #006505;
    background-color: #82b085;
    border-radius: 15px;
    border: 3px double #006505;
    margin:10px;
    
}
#a:hover{
    opacity: 0.6;
    text-decoration: none;
    background-color: skyblue;
  }
  #b{
    float:right;
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 25px;
    font-style: italic;
    color: #006505;
    background-color: #82b085;
    border-radius: 15px;
    border: 3px double #006505;
    margin:10px;
    
}
#b:hover{
    opacity: 0.6;
    text-decoration: none;
    background-color: skyblue;
  }
</style>

@extends('layouts.master')
@section('content')
<h4>{{$arrayClientes['nombre']}}{{$arrayClientes['apellido']}}</h4>
<div class="row">
<div class="col-sm-4">
{{-- TODO: Titulo del libro --}}

</div>
<div class="col-sm-8">
{{-- TODO: Datos del libro --}}
<b>email: </b>{{$arrayClientes['email']}}<br/>
<b>telefono: </b>{{$arrayClientes['telefono']}}<br/>
<b>direccion: </b>{{$arrayClientes['direccion']}}<br/>
<b>password: </b>{{$arrayClientes['password']}}<br/>
<b>tipousuario: </b>{{$arrayClientes['tipousuario']}}<br/>
<b>visa: </b>{{$arrayClientes['visa']}}<br/>
<b>numero: </b>{{$arrayClientes['numero']}}<br/>
</div>
</div>
@stop
<a href="{{ url('/editorial/edit/' . $arrayClientes['id']) }}" id="a">
editar Cliente
</a>

<a href="{{ url('/editorial/borrar/' . $arrayClientes['id']) }}" id="a">
borrar Cliente
</a>
<a href="{{ url('../editorial') }}" id="b" >
volver listado de Cliente
</a>