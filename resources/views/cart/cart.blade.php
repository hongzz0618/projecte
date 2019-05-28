@extends('layouts.layout')
@section('title', 'Cart')
 
@section('content')
 
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Producto</th>
            <th style="width:10%">Precio</th>
            <th style="width:8%">Cantidad</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
 
        <?php $total = 0 ?>
 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['precio'] * $details['quantity'] ?>
 
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['imagen'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nombre'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['precio'] }} €</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['precio'] * $details['quantity'] }} €</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
 
        </tbody>
        <tfoot>
    
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Volver</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total {{ $total }} €</strong></td>
            <td> <button class="btn btn-primary" id="pagar">Pagar</button></td>
             
        </tr>
        </tfoot>
    </table>
 
				
    <div id="Rpago" title="Pago">
            <p id="TotalFinal"></p>
                <form  action="" method="post" class="PagarFormulario">	
                {{ csrf_field() }}
                <div >
                	<label>Como pagar: </label><br/>
					<select  name="targeta">
					  <option id="E"  value ="Efectivo">Efectivo</option>
					  <option id="V"  value ="Visa">Visa</option>
					  <option id="M"  value="Mastercard">Mastercard</option>
			
					</select>
                        
                </div>
                      <div ><br/>
                	<label>Tipo de pedido: </label><br/>
                	
					<select name="pedido">
					  <option value ="parallevar">parallevar</option>
					  <option  value ="comeaqui">comeaqui</option>
					
			
					</select>
                        
                </div>
                <div>
                	<br/>
                    <label>NumeroTargeta:</label>
                    <input id="NumeroP" type="text"  value="5189387896488361" name="n3">
                    
                </div>
                <div style="display: table;">
                	
                    <label>Caducidad Final: </label>
                    
                    <input type="text"  id="Data" value="12/21" name="n4"> 
                    <label for="Data" class="diseñoData">
                        <i class="far fa-calendar-alt"></i> <i class="fas fa-angle-down"></i>
                    </label>
                    
                </div>
                <div>
                	
                    <label>NumeroDedetras:</label>
                    <input id="NumeroD" type="text" value="432" name="n5">
                </div>
                <p>Total para pagar: <?php echo $total." €"; ?></p>
                <button type="button" id="CancelarP" class="btn btn-primary"><i class="fas fa-ban"></i> Cancelar</button>
                <button type="submit"  id="PagarP" class="btn btn-primary"><i class="fas fa-coins"></i> Pagar</button>
            </form>
    </div>


    <div id="ERRORESTIENDA">
        <p id="ErroresTienda"></p>
    </div>
<script>
window.onload=function(){

$('#Rpago').hide();
$("#CancelarP").click(CancelarPago);
$("#PagarP").click(RealizarPago);


// Pagar

$("#pagar").click(pagar);

//Borrar

// ----------------------------------------
//Errores de tienda
var ErroresTienda = {
    width: 500,
    height: 150,
    autoOpen: false,
    modal: true
};
$("#ERRORESTIENDA").dialog(ErroresTienda);


var OpcionesP ={
    width: 450,
    height: 410,
    autoOpen: false,
    modal: true,
    show: {
        effect: "blind",
        duration: 1000
    },
    hide: {
        effect: "explode",
        duration: 1000
    }
}
$("#Rpago").dialog(OpcionesP);
// -------------------------------------
// Errores de agregar
$("#IntroducirDatosP").dialog(ErroresTienda);
// EDITARJUGADOR

// pagar
}

function CancelarPago(){
    $("#Rpago").dialog("close");
}
function TarjetaV(numero) {
    var TarjetaV = {
      "Visa": /\b4[0-9]{12}(?:[0-9]{3})?\b/
    };
    for(var card in TarjetaV) {
      if (TarjetaV[card].test(numero)) {
        var arr = numero.match(TarjetaV[card]);
        return { type: card, number: arr[0] };
      }
    }
    return undefined;
}
function TarjetaM(numero){
    var TarjetaM = {
        "Mastercard": /\b5[1-5][0-9]{14}\b/
    };
    for(var card in TarjetaM) {
        if (TarjetaM[card].test(numero)) {
        var arr = numero.match(TarjetaM[card]);
        return { type: card, number: arr[0] };
        }
    }
    return undefined;
}
function validate_fechaMayorQue(fechaInicial,fechaFinal){
    valuesStart=fechaInicial.split("/");
    valuesEnd=fechaFinal.split("/");
    // Verificamos que la fecha no sea posterior a la actual
    var dateStart=new Date(valuesStart[2],(valuesStart[1]-1),valuesStart[0]);
    var dateEnd=new Date(valuesEnd[2],(valuesEnd[1]-1),valuesEnd[0]);
    if(dateStart>=dateEnd)
    {
        return 0;
    }
    return 1;
}
function RealizarPago(){
    var Titular = $("#TitularP").val();
    Sololetra = /[0-9]/;
    
    var hoy= new Date();
    var AnyoFecha = hoy.getFullYear();
    var MesFecha = hoy.getMonth();
    var DiaFecha = hoy.getDate();
    var resultafchahoy=DiaFecha+"/"+(MesFecha+1)+"/"+AnyoFecha;
    var fehcain = document.getElementById("Data").value;
    
    if(Sololetra.test(Titular) || Titular.length<1 ) {
        $('#ErroresTienda').html('El titular tiene que ser obligatorio y tambien no tiene que ser numero');
        $("#ERRORESTIENDA").dialog("open");
  
    }else{
        if($("#V").is(':checked')) {  
            var Numero= $("#NumeroP").val();
            var card = TarjetaV(Numero);
            
            if (card) {
                if (fehcain.length<1) {
                    $('#ErroresTienda').html("Introdusca Su fecha de vencimiento porfavor");
                    $("#ERRORESTIENDA").dialog("open");
                }else{
                    if (validate_fechaMayorQue(resultafchahoy,fehcain)) {
                        window.location.reload(true);
                        // $('#ErroresTienda').html("Compra realizada "+ card.type);
                        $("#ERRORESTIENDA").dialog("open");

                    }else{
                        
                        $('#ErroresTienda').html("Error fecha pasada cambiar fecha");
                        $("#ERRORESTIENDA").dialog("open");
                        
                        
                    }
                }            
            }else{
                $('#ErroresTienda').html("ERROR DE TARJETA O NO ES VISA O FALTA INTRODUCIR");
                $("#ERRORESTIENDA").dialog("open");
               
            } 
        } else if($("#M").is(':checked')) {  
            var Numero= $("#NumeroP").val();
            var card = TarjetaM(Numero);
            if (card) {
                if (fehcain.length<1) {
                    $('#ErroresTienda').html("Introdusca Su fecha de vencimiento porfavor");
                    $("#ERRORESTIENDA").dialog("open");
                }else{
                    if (validate_fechaMayorQue(resultafchahoy,fehcain)) {
                        window.location.reload(true);
                        // $('#ErroresTienda').html("Compra realizada "+ card.type);
                        $("#ERRORESTIENDA").dialog("open");

                    }else{
                        $('#ErroresTienda').html("Error fecha pasada cambiar fecha");
                        $("#ERRORESTIENDA").dialog("open");
                        
                        
                    }
                }
                    
            }else{
                $('#ErroresTienda').html('ERROR DE TARJETA O NO ES MASTERCARD O FALTA INTRODUCIR');
                $("#ERRORESTIENDA").dialog("open");
                
            } 
        }
        else {  
            $('#ErroresTienda').html("SELECIONE VISA O MASTERCARD");
            $("#ERRORESTIENDA").dialog("open");
            
        } 
    }
        

      
}

function pagar(){
    
            $("#Rpago").dialog("open");
    
    
}
</script>
@section('scripts')
 
 
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 

                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            
        });
 
 
    </script>
 
@endsection
@endsection