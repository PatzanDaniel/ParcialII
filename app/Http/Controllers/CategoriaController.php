<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        $productos = $categoria->productos; // Asumiendo que el modelo tiene una relación 'productos'
        return view('categorias.productos', compact('productos', 'categoria'));
    }
}
