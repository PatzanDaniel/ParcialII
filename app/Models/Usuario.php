<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    // Relación uno a muchos con Carrito
    public function carritos()
    {
        return $this->hasMany(Carrito::class, 'id_usuario', 'id_usuario');
    }

    // Relación uno a muchos con Pedido
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_usuario', 'id_usuario');
    }
}