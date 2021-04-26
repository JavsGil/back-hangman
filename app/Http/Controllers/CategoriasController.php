<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoriasController extends Controller
{
    public function GetCategorias() :Object 
    {
        try {
             
            $categorias  = Categorias::get();
            return response()->json($categorias, 200);

        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage());
        }
    }
}
