

@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true">Añadir Producto</span>
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
				<form action="{{ url('catalog') }}" method="post">
					{{-- TODO: Protección contra CSRF --}}
					{{ csrf_field() }}
    				<div class="form-group">
    					<label for="nombre">Nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control">
					</div>

					<div class="form-group">
						{{-- TODO: Completa el input para el año --}}
						<label for="precio">Precio</label>
    					<input type="text" name="precio" id="precio" class="form-control">

					</div>
					<div class="form-group">
						{{-- TODO: Completa el input para el año --}}
						<label for="imagen">Imagen</label>
    					<input type="text" name="imagen" id="imagen" class="form-control">

					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
						Añadir Producto
						</button>
					</div>

				{{-- TODO: Cerrar formulario --}}
				</form>
			</div>
		</div>
	</div>
</div>


@stop
