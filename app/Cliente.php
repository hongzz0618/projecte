<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = ['id', 'nombre', 'apellido','email', 'telefono', 'direccion', 'password', 'tipousuario', 'visa', 'numero'];
}
?>