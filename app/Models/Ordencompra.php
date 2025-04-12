<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordencompra extends Model
{
    use HasFactory;

    protected $fillable = [
        'productos_id',
        'proveedores_id',
        'cantidad',
        'fecha_orden',
        'fecha_entrega_estimada',
    ];
}
