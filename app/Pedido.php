<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $fillable = ['id', 'tipopedido','estado', 'total', 'pagado','id_cliente'];
}
?>