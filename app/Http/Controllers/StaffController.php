<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Staff;
class StaffController extends Controller{

    
    public function getIndex(){
        $arrayStaffs = Staff::all();
        return view('Staff.index', array('arrayStaffs'=>$arrayStaffs));
    }
    
    public function getShow($id){
        $arrayStaffs = Staff::find($id);
        return view('Staff.show', array('arrayStaffs'=>$arrayStaffs));
    }

    public function getDelete($id){
        $arrayStaffs = Staff::find($id);
        $arrayStaffs->delete();
        return view('Staff.borrar', array('arrayStaffs'=>$arrayStaffs));
    }

 

    public function getCreate(){
        return view('Staff.create');
    }
    public function getInsert(){
    
        $contacto = new Staff;
        $contacto->nombre=request("nombre");
        $contacto->password=Hash::make(request("password"));
        $contacto->horadetrabajo=request("horadetrabajo");
        $contacto->tipostaff=request("tipostaff");
        $contacto->id_empresa=request("id_empresa");
        $contacto->save();
   
      
        return view('Staff.insertado');
    }

   

    public function getEdit($id){
        $arrayStaffs = Staff::find($id);
        return view('Staff.edit', array('arrayStaffs'=>$arrayStaffs));
    }
    public function getUpdate(Request $_request, $id){
        $n1=$_request->input("nombre");
        $n2=$_request->input("horadetrabajo");
        $n6=Hash::make($_request->input("password"));
        $n7=$_request->input("tipostaff");
        $n3=$_request->input("id_empresa");
        $arrayStaffs = Staff::find($id);
        $arrayStaffs->nombre=$n1;
        $arrayStaffs->horadetrabajo=$n2;
        $arrayStaffs->id_empresa=$n3;
        $arrayStaffs->password=$n6;
        $arrayStaffs->tipostaff=$n7;
        $arrayStaffs->save();
        return view('Staff.editado');
    }
    public function store(Request $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password') );
        $user->save();
    }
}
