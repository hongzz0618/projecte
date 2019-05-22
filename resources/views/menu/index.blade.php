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
    #coche{
        width: 30%;
                                                                                                                                                                   
    }
    
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <link href="/js/jquery-ui-1.12.1.custom/jquery-ui.structure.css" rel="stylesheet" type="text/css" />
    <link href="/js/jquery-ui-1.12.1.custom/jquery-ui.theme.css" rel="stylesheet" type="text/css" /> 
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
        <div id="coche" class="">
            <div  class="stylo1 border border-secondary">
                    <i class="fas fa-shopping-cart"></i>
                    
            </div>
            <div class="stylo2 border border-secondary"  id="compra">
                    <table id="cartcontent" class="table">
                        <thead>
                            <tr>
                                <th scope="col" id="Datos1">Producto</th>
                                <th scope="col" id="Datos3">Cantidad</th>
                                <th scope="col" id="Datos2">Precio</th>
                                
                            </tr>
                            <tr>
                                <td id="eje"></td>
                                <td id="cantidad"></td>
                                <td id="Precio"></td>
                                
                            </tr>
                        </thead>
                    </table>
            </div>
            <div class="stylo3 border border-secondary" >
                <p id="Total"></p>
                <button id="pagar" type="button" class="btn btn-secondary"><i class="fas fa-coins"></i>Pagar</button>
            </div>
        </div>
    </div>
    
    <!-- Formulario de pago de la tarjeta de visa y mastercard -->
    <div id="Rpago" title="Pagamiento">
            <p id="TotalFinal"></p>
            <form class="PagarFormulario">
                <div >
                    <label>NombreT:</label>
                    <input id="TitularP" type="text" placeholder="Titular">
                    
                </div>
                <div >
                        <label>Type to pay: </label>
                        <input id="E" type="radio" name="TipusB" value="Visa"> Efectivo
                        <input id="V" type="radio" name="TipusB" value="Visa"> Visa
                        <input id="M" type="radio" name="TipusB" value="Mastercard"> Mastercard<br>
                </div>
                <div>
                    <label>NumeroTargeta:</label>
                    <input id="NumeroP" type="text"  placeholder="1234567812345678">
                </div>
                <div style="display: table;">
                    <label>Caducidad Final: </label>
                    
                    <input type="text"  id="Data" > 
                    <label for="Data" class="diseñoData">
                        <i class="far fa-calendar-alt"></i> <i class="fas fa-angle-down"></i>
                    </label>
                    
                </div>
                <div>
                    <label>NumeroDedetras:</label>
                    <input id="NumeroD" type="text"  placeholder="123">
                </div>
                
                <button type="button" id="CancelarP" class="btn btn-primary"><i class="fas fa-ban"></i> Cancelar</button>
                <button type="button" id="PagarP" class="btn btn-primary"><i class="fas fa-coins"></i> Pagar</button>
            </form>
    </div>
    <div id="ERRORESTIENDA">
        <p id="ErroresTienda"></p>
    </div>
<script src="/js/project.js"></script>

</body>
</html>


<h1 id="h1">Menu de la Empresa<h1>
<div class="row">
@foreach( $arrayProductos as $key => $Producto )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">
 <h4 style="min-height:45px;margin:5px 0 10px 0">

<img src="{{$Producto['imagen']}}" alt="">
<button id="añadir carro">+</button>
{{$Producto['nombre']}}<br/>
{{$Producto['precio']}}<br/>

 </h4>
 </a>
</div>
@endforeach

</div>
@stop