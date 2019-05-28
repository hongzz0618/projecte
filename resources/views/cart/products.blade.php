@extends('layouts.layout')
 
@section('title', 'Products')
 
@section('content')
 
    <div class="container products">
 
        <div class="row">
 
            @foreach($producto as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->imagen }}" width="440" height="220">
                        <div class="caption">
                            <h4>{{ $product->nombre }}</h4>
                           
                            <p><strong>Precio: </strong> {{ $product->precio }} €</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Añadir al carrito</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
 
@endsection