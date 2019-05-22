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
<h1 id="h1">Staff de la empresa<h1>
<div class="row">
@foreach( $arrayStaffs as $key => $usu )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">
 <a href="{{ url('/Staff/show/' . $usu['id']) }}">
 <h4 style="min-height:45px;margin:5px 0 10px 0">
 {{$usu['nombre']}}
 </h4>
 </a>
</div>
@endforeach
</div>
@stop