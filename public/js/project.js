
window.onload=function(){

    $('#Rpago').hide();
    $("#CancelarP").click(CancelarPago);
    $("#targeta").click(ver);

  
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
        height: 500,
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
    
    // EDITARJUGADOR


    // pagar
    
    
}


function ver() {
    if ($("#targeta").val()="Efectivo") {
        $("#ver").css('display', 'none');
    }
}
function CancelarPago(){
    $("#Rpago").dialog("close");
}


function pagar(){
    var Contenido = $("#total").text();
    if (Contenido<=0) {
        $('#ErroresTienda').html('No has seleccionado nada al carrito');
        $("#ERRORESTIENDA").dialog("open");
       
    }else{
        if(!$("#Rpago").dialog("isOpen")) {
            $("#Rpago").dialog("open");
        }
    }
    
}

