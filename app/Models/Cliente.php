<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'dni',
        'ruc',
        'direccion',
        'telefono',
        'email'
    ];
}

Schema::create('clientes', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->string('dni')->unique();
    $table->string('ruc')->nullable()->unique();
    $table->string('direccion')->nullable();
    $table->string('telefono')->nullable();
    $table->string('email')->nullable()->unique();
    $table->timestamps();
});
