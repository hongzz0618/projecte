<style>
    body{
        background-color: #C6C3C3;
    }
</style>
@extends('layouts.master')
@section('content')

<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-nombre text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true">Modificar Producto</span>
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
				<form action="{{ url('catalog/getUpdate/'.$arrayProductos['id']) }}" method="post">
            
					{{-- TODO: Protección contra CSRF --}}
					{{ csrf_field() }}
    				<div class="form-group">
    					<label for="nombre">Nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control" value="{{$arrayProductos['nombre']}}">
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el precio --}}
						<label for="precio">precio</label>
    					<input type="text" name="precio" id="precio" class="form-control" value="{{$arrayProductos['precio']}}">

					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el año --}}
						<label for="imagen">Imagen</label>
    					<input type="text" name="imagen" id="imagen" class="form-control" value="{{$arrayProductos['imagen']}}">

					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
						Modificar Producto
						</button>
					</div>

				{{-- TODO: Cerrar formulario --}}
				</form>
			</div>
		</div>
	</div>
</div>


@stop
