<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaCategorias = Categoria::all();
        return view('inventario.categorias.categoria', compact('listaCategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.categorias.crear_categoria');
    }

    public function store(StoreCategoriaRequest $request)
    {
        try{
            $data = $request->all();
            $categoria = Categoria::query()->create([
                'nombre_categoria'  => $request->nombreCategoria,
                'descripcion'       => $request->descripcionCategoria,
                'estado'            => 'ACTIVO'
            ]);


//            DB::table('categorias')->insert([
//                'nombre_categoria'  => $request->nombreCategoria,
//                'descripcion'       => $request->descripcionCategoria,
//                'estado'            => 'ACTIVO'
//            ]);
//
//            $postResponse = "Paciente registrado exitosamente";
//
//            return response()->json([
//                'responseMessage' => $postResponse
//            ]);
//
//            return Redirect::refresh();
            return redirect()->route('ver-categorias');
        }catch (\Exception $e){
            return response()->json([
                "error" => $e
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    public function mostrarTodos(Request $request){
        if($request->ajax()) {
            $query = DB::table('categorias', 'cat')
                ->selectRaw('
                    cat.nombre_categoria,
                    cat.descripcion
                ');

            if($request->server_order){
                $column = $request->server_order[0]['column'];
                $dir = $request->server_order[0]['dir'];
            }else{
                $column = null;
            }

            $table = datatables((isset($columns[$column]) ? $query->orderBy($columns[$column], $dir) : $query)->get())->toJson();
            return $table;
        }else {
            return response()->json([
                "error" => "Your ajax request was invalid."
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriaRequest  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('ver-categorias');
    }
}
