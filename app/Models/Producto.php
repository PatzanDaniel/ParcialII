<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'Productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;

    // Relación inversa con Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }

    // Relación muchos a muchos con Pedido
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'Pedido_Productos', 'id_producto', 'id_pedido')
                    ->withPivot('cantidad', 'precio');
    }

    // Relación muchos a muchos con Carrito
    public function carritos()
    {
        return $this->belongsToMany(Carrito::class, 'Carrito_Productos', 'id_producto', 'id_carrito')
                    ->withPivot('cantidad');
    }
}