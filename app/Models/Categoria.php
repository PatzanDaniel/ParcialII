<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categorias';
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;

    // Relación uno a muchos con Producto
    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria', 'id_categoria');
    }
}
