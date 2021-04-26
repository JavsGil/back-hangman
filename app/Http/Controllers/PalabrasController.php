<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Palabras;
use App\Models\Categorias;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PalabrasController extends Controller
{
    public function GetPalabrasByCategoria (int $id) :Object
    {
        try {

            $categoria = Categorias::select('id','name')->where('id',$id)->get();
          
            $categoria->map(function($item) use($id){
                $item->palabras = Palabras::where('id_categoria',$id)->get();
                
                return $item;
            });

            return response()->json($categoria, 200);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage());
        }
    }
}
