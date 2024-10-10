<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'Sucursales';
    protected $primaryKey = 'id_sucursal';
    public $timestamps = false;

    // Relación uno a muchos con Pedido
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_sucursal', 'id_sucursal');
    }
}
