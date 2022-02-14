<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComprasRequest;
use App\Http\Requests\UpdateComprasRequest;
use App\Models\Compras;

class ComprasController extends Controller
{
    public function index()
    {
        $listaCompras = Compras::all();
        return view('inventario.compras.compras', compact('listaCompras'));
    }

    public function create()
    {
        return view('inventario.compras.crear_compra');
    }

    public function store(StoreComprasRequest $request)
    {
        $compras = Compras::saved($request->all());

        foreach ($request->producto_id as $key => $item){
            $resulados[] = array(
                "producto_id" => $request->producto_id[$key],
                "cantidad"    => $request->cantidad[$key],
                "precio"      => $request->precio[$key]
            );

            $compras->detalleCompras()->createMany($resulados);
        }

        return redirect()->route('compras');
    }

    public function show(Compras $compras)
    {
        return view('inventario.compras.mostrar_compras', compact('compras'));
    }

    public function edit(Compras $compras)
    {
        return view('inventario.compras.mostrar_compras', compact('compras'));
    }

    public function update(UpdateComprasRequest $request, Compras $compras)
    {
        $compras->update($request->all());
        return redirect()->route('compras');
    }

    public function destroy(Compras $compras)
    {
        $compras->delete();
        return redirect()->route('compras');
    }
}
