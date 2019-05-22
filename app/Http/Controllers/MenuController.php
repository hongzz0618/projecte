<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Producto;

class MenuController extends Controller{

    public function getIndex(){
        $arrayProductos = Producto::all();
        return view('menu.index', array('arrayProductos'=>$arrayProductos));
    }
    
    public function getShow($id){
        $arrayProductos = Producto::find($id);
        return view('menu.show', array('arrayProductos'=>$arrayProductos));
    }
 


}
