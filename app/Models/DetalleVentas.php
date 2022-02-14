<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    use HasFactory;

    protected $fillable = [
        'compras_id',
        'producto_id',
        'cantidad',
        'precio',
        'descuento'
    ];

    public function producto(){
        return $this->hasMany(Producto::class);
    }
}
