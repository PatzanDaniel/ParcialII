<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'Carrito';
    protected $primaryKey = 'id_carrito';
    public $timestamps = false;

    // Relación con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    // Relación muchos a muchos con Producto
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'Carrito_Productos', 'id_carrito', 'id_producto')
                    ->withPivot('cantidad');
    }
}