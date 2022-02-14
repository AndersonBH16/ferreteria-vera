<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVentasRequest;
use App\Http\Requests\UpdateVentasRequest;
use App\Models\Cliente;
use App\Models\Ventas;

class VentasController extends Controller
{
    public function index()
    {
        $listaVentas = Ventas::all();
        return view('inventario.ventas.ventas', compact('listaVentas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('inventario.ventas.crear_venta', compact('clientes'));
    }

    public function store(StoreVentasRequest $request)
    {
        $ventas = Ventas::saved($request->all());

        foreach ($request->producto_id as $key => $item){
            $resulados[] = array(
                "producto_id" => $request->producto_id[$key],
                "cantidad"    => $request->cantidad[$key],
                "precio"      => $request->precio[$key],
                "descuento"   => $request->descuento[$key]
            );

            $ventas->detalleVentas()->createMany($resulados);
        }

        return redirect()->route('ventas');
    }

    public function show(Ventas $ventas)
    {
        return view('inventario.ventas.mostrar_ventas', compact('ventas'));
    }

    public function edit(Ventas $ventas)
    {
        $clientes = Cliente::all();
        return view('inventario.ventas.mostrar_ventas', compact('ventas'));
    }

    public function update(UpdateVentasRequest $request, Ventas $ventas)
    {
        $ventas->update($request->all());
        return redirect()->route('ventas');
    }

    public function destroy(Ventas $ventas)
    {
        $ventas->delete();
        return redirect()->route('ventas');
    }
}
