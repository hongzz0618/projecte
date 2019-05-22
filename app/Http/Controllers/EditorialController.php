<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Cliente;
class EditorialController extends Controller{

    
    public function getIndex(){
        $arrayClientes = Cliente::all();
        return view('Editorial.index', array('arrayClientes'=>$arrayClientes));
    }
    
    public function getShow($id){
        $arrayClientes = Cliente::find($id);
        return view('Editorial.show', array('arrayClientes'=>$arrayClientes));
    }

    public function getDelete($id){
        $arrayClientes = Cliente::find($id);
        $arrayClientes->delete();
        return view('Editorial.borrar', array('arrayClientes'=>$arrayClientes));
    }

 

    public function getCreate(){
        return view('Editorial.create');
    }
    public function getInsert(){
    
        $contacto = new Cliente;
        $contacto->nombre=request("nombre");
        $contacto->apellido=request("apellido");
        $contacto->email=request("email");
        $contacto->direccion=request("direccion");
        $contacto->telefono=request("telefono");
        $contacto->direccion=request("direccion");
        $contacto->password=Hash::make(request("password"));
        $contacto->tipousuario=request("tipousuario");
        $contacto->visa=Hash::make(request("visa"));
        $contacto->numero=Hash::make(request("numero"));
        $contacto->save();
   
      
        return view('Editorial.insertado');
    }

   

    public function getEdit($id){
        $arrayClientes = Cliente::find($id);
        return view('Editorial.edit', array('arrayClientes'=>$arrayClientes));
    }
    public function getUpdate(Request $_request, $id){
        $n1=$_request->input("nombre");
        $n2=$_request->input("apellido");
        $n3=$_request->input("email");
        $n4=$_request->input("telefono");
        $n5=$_request->input("direccion");
        $n6=Hash::make($_request->input("password"));
        $n7=$_request->input("tipousuario");
        $n8=Hash::make($_request->input("visa"));
        $n9=Hash::make($_request->input("numero"));
        $arrayClientes = Cliente::find($id);
        $arrayClientes->nombre=$n1;
        $arrayClientes->apellido=$n2;
        $arrayClientes->email=$n3;
        $arrayClientes->telefono=$n4;
        $arrayClientes->direccion=$n5;
        $arrayClientes->password=$n6;
        $arrayClientes->tipousuario=$n7;
        $arrayClientes->visa=$n8;
        $arrayClientes->numero=$n9;
        $arrayClientes->save();
        return view('Editorial.editado');
    }
    public function store(Request $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password') );
        $user->save();
    }

}
