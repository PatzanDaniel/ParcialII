<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'Pedidos';
    protected $primaryKey = 'id_pedido';
    public $timestamps = false;

    // Relación con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    // Relación con Sucursal
    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'id_sucursal', 'id_sucursal');
    }

    // Relación muchos a muchos con Producto
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'Pedido_Productos', 'id_pedido', 'id_producto')
                    ->withPivot('cantidad', 'precio');
    }
}
