comprobarL()
/*ESTA  FUNCION COMPRUEBA SI EL USUARIO INICIO SECION O NO ESTO LOGUEADO ESTO ES PARA QUE TU NO PUEDAS 
ABLIR DESDE EL FICHERO Y SI HABLES DESDE ESE FICHERO USUARIO.HTML O ADMINISTRADOR.HTML TE MANDARA A LA 
PAGINA DE INICIO ASI PARA QUE NO PUEDAS ENTRAR HASTA QUE INICIES SECCION*/
function comprobarL(){
    //TODO ESTO ES GRACIA POR QUE GUARDAMOS LOS NOMBRE Y PASSWORD DE LOS USUARIO EN LOCAL Y SESSION STORAGE 
    //SI ESTAN VACIO TE MANDA AL ARCHIVO INICIO
    if (sessionStorage['usuario']  &&  localStorage['password']) { 
    }else{
        window.location="inicio.html"
    }
}