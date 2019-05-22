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
<h4>{{$arrayStaffs['nombre']}}{{$arrayStaffs['apellido']}}</h4>
<div class="row">
<div class="col-sm-4">
{{-- TODO: Titulo del libro --}}

</div>
<div class="col-sm-8">
{{-- TODO: Datos del libro --}}
<b>password: </b>{{$arrayStaffs['password']}}<br/>
<b>horario de trabajo: </b>{{$arrayStaffs['horadetrabajo']}}<br/>
<b>tipostaff: </b>{{$arrayStaffs['tipostaff']}}<br/>
<b>id_empresa: </b>{{$arrayStaffs['id_empresa']}}<br/>

</div>
</div>
@stop
<a href="{{ url('/Staff/edit/' . $arrayStaffs['id']) }}" id="a">
editar Staff
</a>

<a href="{{ url('/Staff/borrar/' . $arrayStaffs['id']) }}" id="a">
borrar Staff
</a>
<a href="{{ url('../Staff') }}" id="b" >
volver listado de Staff
</a>