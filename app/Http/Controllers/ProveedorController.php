<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $listaProveedores = Proveedor::all();
        return view('inventario.proveedores.proveedores', compact('listaProveedores'));
    }

    public function create()
    {
        return view('inventario.categorias.crear_categoria');
    }

    public function store(StoreProveedorRequest $request)
    {
//        Proveedor::save($request->all());
//        return redirect()->route('proveedores');

        try{
            $data = $request->all();
            Proveedor::query()->create([
                'nombre_categoria'  => $request->nombreCategoria,
                'descripcion'       => $request->descripcionCategoria,
                'estado'            => 'ACTIVO'
            ]);

            return redirect()->route('ver-categorias');
        }catch (\Exception $e){
            return response()->json([
                "error" => $e
            ]);
        }
    }

    public function show(Proveedor $proveedor)
    {
        return view('inventario.proveedores.mostrar-proveedores', compact('proveedor'));
    }

    public function edit(Proveedor $proveedor)
    {
        return view('inventario.proveedores.mostrar-proveedores', compact('proveedor'));
    }

    public function update(UpdateProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return redirect()->route('proveedores');
    }

    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores');
    }
}
