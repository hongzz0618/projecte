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

<h1 id="h1">Productos de la Empresa<h1>
<div class="row">
@foreach( $arrayProductos as $key => $Producto )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">
 <a href="{{ url('/catalog/show/' . $Producto['id']) }}">
 <h4 style="min-height:45px;margin:5px 0 10px 0">
{{$Producto['nombre']}}<br/><br/>
<img src="{{$Producto['imagen']}}" alt="">
 </h4>
 </a>
</div>

@endforeach

</div>
@stop
