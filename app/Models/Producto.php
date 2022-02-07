<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre_producto',
        'stock',
        'imagen',
        'precio_individual',
        'estado',
        'categoria_id',
        'proveedor_id'
    ];

    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }

    public function proveedores(){
        return $this->belongsTo(Categoria::class);
    }
}
