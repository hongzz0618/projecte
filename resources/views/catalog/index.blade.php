
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
<h1 id="h1">Producto de la empresa<h1>
<div class="row">
<div class="col-xs-6 col-sm-8 col-md-12 text-center">
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">tipopedido</th>
      <th scope="col">estado</th>
      <th scope="col">total</th>
      <th scope="col">pagado</th>
      <th scope="col">id_cliente</th>

    </tr>
  </thead>
  <tbody>

@foreach( $arrayProductos as $key => $u )
@if($u['estado']=="encurso")
<tr>
      <td><a href="{{ url('/catalog/show/' . $u['id']) }}">{{$u['id']}}</a></td>
      <td>{{$u['tipopedido']}}</td>
      <td>{{$u['estado']}}</td>
      <td>{{$u['total']}}</td>
      <td>{{$u['pagado']}}</td>
      <td>{{$u['id_cliente']}}</td>
      
    </tr>
@endif
 @endforeach

 </tbody>
</table>


</div>

</div>
@stop