<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompras extends Model
{
    use HasFactory;

    protected $fillable = [
        'compras_id',
        'producto_id',
        'cantidad',
        'precio'
    ];

    public function compra(){
        return $this->belongsTo(Compras::class);
    }

    public function producto(){
        return $this->hasMany(Producto::class);
    }
}
