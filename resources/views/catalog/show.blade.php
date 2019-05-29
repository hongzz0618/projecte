<style>
    body{
        background-color: #C6C3C3;
    }
img{
    width:440px;
    height:220px;
}
body{
        background-color: #C6C3C3;
    }
#a{
    
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 25px;
    font-style: italic;
    color: #006505;
    background-color: #82b085;
    border-radius: 15px;
    border: 3px double #006505;
    margin:10px;
    
}
#a:hover{
    opacity: 0.6;
    text-decoration: none;
    background-color: skyblue;
  }
  #b{
    float:right;
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 25px;
    font-style: italic;
    color: #006505;
    background-color: #82b085;
    border-radius: 15px;
    border: 3px double #006505;
    margin:10px;
    
}
#b:hover{
    opacity: 0.6;
    text-decoration: none;
    background-color: skyblue;
  }
</style>

@extends('layouts.master')



<a href="{{ url('/catalog/borrar/' . $arrayProductos['id']) }}"  id="a">
Pedido Preparado
</a>

<a href="{{ url('../') }}"  id="b">
volver 
</a>

