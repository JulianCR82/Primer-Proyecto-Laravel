<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class ApiCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categorias = Categoria::all();
        return response()->json($categorias, 200);
    }

   // GET /api/productos/{id}
   public function show($id)
   {
       $categorias = Categoria::find($id);

       if ($categorias) {
           return response()->json($categorias, 200);
       } else {
           return response()->json(['error' => 'Categoria no encontrada'], 404);
       }
   }

   // POST /api/productos
   public function store(Request $request)
   {
       $categorias = Categoria::create([
           'nombre' => $request->nombre,
           'descripcion' => $request->descripcion,
       ]);
       return response()->json($categorias, 201);
   }

   // PUT /api/productos/{id}
   public function update(Request $request, $id)
   {
       $categorias = Categoria::find($id);

       if ($categorias) {
           $categorias->update($request->all());
           return response()->json($categorias, 200);
       } else {
           return response()->json(['error' => 'Categoria no encontrada'], 404);
       }
   }

   // DELETE /api/productos/{id}
   public function destroy($id)
   {
       $categorias = Categoria::find($id);

       if ($categorias) {
           $categorias->delete();
           return response()->json(null, 204);
       } else {
           return response()->json(['error' => 'Categoria no encontrada'], 404);
       }
   }
}
