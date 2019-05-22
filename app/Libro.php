<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';
    protected $fillable = ['id', 'name', 'year', 'escritor', 'rented', 'synopsis'];
}
?>