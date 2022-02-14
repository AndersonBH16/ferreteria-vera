<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $listaClientes = Cliente::all();
        return view('inventario.clientes.clientes', compact('listaClientes'));
    }


    public function create()
    {
        return view('inventario.clientes.crear_cliente');
    }

    public function store(StoreClienteRequest $request)
    {
        Cliente::save($request->all());
        return redirect()->route('clientes');
    }

    public function show(Cliente $cliente)
    {
        return view('inventario.clientes.mostrar_clientes', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('inventario.clientes.mostrar_clientes', compact('cliente'));
    }

    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes');
    }
}
