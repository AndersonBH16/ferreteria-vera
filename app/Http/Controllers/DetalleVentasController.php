<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetalleVentasRequest;
use App\Http\Requests\UpdateDetalleVentasRequest;
use App\Models\DetalleVentas;

class DetalleVentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetalleVentasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalleVentasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleVentas  $detalleVentas
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleVentas $detalleVentas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleVentas  $detalleVentas
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVentas $detalleVentas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetalleVentasRequest  $request
     * @param  \App\Models\DetalleVentas  $detalleVentas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetalleVentasRequest $request, DetalleVentas $detalleVentas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleVentas  $detalleVentas
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleVentas $detalleVentas)
    {
        //
    }
}
