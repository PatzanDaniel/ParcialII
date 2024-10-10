<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Usuario;
use App\Models\Sucursal;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      
        // Crear algunas categorías
        $categoria1 = Categoria::create(['nombre' => 'Electrónica']);
        $categoria2 = Categoria::create(['nombre' => 'Ropa']);

        // Crear algunos productos
        Producto::create(['nombre' => 'Smartphone', 'descripcion' => 'Smartphone de última generación', 'precio' => 699, 'id_categoria' => $categoria1->id_categoria]);
        Producto::create(['nombre' => 'Laptop', 'descripcion' => 'Laptop para juegos', 'precio' => 1299, 'id_categoria' => $categoria1->id_categoria]);
        Producto::create(['nombre' => 'Camisa', 'descripcion' => 'Camisa de algodón', 'precio' => 39.99, 'id_categoria' => $categoria2->id_categoria]);
        
        
    }
}