<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pedido;
use \App\Producto;

class CatalogController extends Controller{

    public function getIndex(){
        $arrayProductos = Pedido::all();
        return view('catalog.index', array('arrayProductos'=>$arrayProductos));
    }
    
    public function getShow($id){
        $arrayProductos = Pedido::find($id);
        return view('catalog.show', array('arrayProductos'=>$arrayProductos));
    }

    public function getDelete($id){
        $arrayProductos = Pedido::find($id);
        $arrayProductos->estado="preparado";
        $arrayProductos->save();
        return view('catalog.borrar', array('arrayProductos'=>$arrayProductos));
    }

 

    public function getCreate(){
        return view('catalog.create');
    }
    public function getInsert(){
    
        $contacto = new Producto;
        $contacto->nombre=request("nombre");
        $contacto->precio=request("precio");
        $contacto->imagen=request("imagen"); 
        $contacto->save();
   
        return view('catalog.insertado');
    }

   

    public function getEdit($id){
        $arrayProductos = Producto::find($id);
        return view('catalog.edit', array('arrayProductos'=>$arrayProductos));
    }
    public function getUpdate(Request $_request, $id){
        $n1=$_request->input("nombre");
        $n2=$_request->input("precio");
        $n3=$_request->input("imagen");
        $arrayProductos = Producto::find($id);
        $arrayProductos->nombre=$n1;
        $arrayProductos->precio=$n2;
        $arrayProductos->imagen=$n3;
        $arrayProductos->save();
        return view('catalog.editado');
    }
    public function store(Request $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password') );
        $user->save();
    }
}
