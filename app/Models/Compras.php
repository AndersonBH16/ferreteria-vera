<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $fillable = [
        'proveedor_id',
        'user_id',
        'fecha_compra',
        'igv',
        'total',
        'estado',
        'imagen'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    public function detalleCompras(){
        return $this->hasMany(DetalleCompras::class);
    }
}
