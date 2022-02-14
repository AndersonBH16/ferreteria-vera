<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetalleComprasRequest;
use App\Http\Requests\UpdateDetalleComprasRequest;
use App\Models\DetalleCompras;

class DetalleComprasController extends Controller
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
     * @param  \App\Http\Requests\StoreDetalleComprasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalleComprasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleCompras  $detalleCompras
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleCompras $detalleCompras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleCompras  $detalleCompras
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleCompras $detalleCompras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetalleComprasRequest  $request
     * @param  \App\Models\DetalleCompras  $detalleCompras
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetalleComprasRequest $request, DetalleCompras $detalleCompras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleCompras  $detalleCompras
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleCompras $detalleCompras)
    {
        //
    }
}
