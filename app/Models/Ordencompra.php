<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordencompra
 *
 * @property $id
 * @property $productos_id
 * @property $proveedores_id
 * @property $cantidad
 * @property $fecha_orden
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordencompra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['productos_id', 'proveedores_id', 'cantidad', 'fecha_orden'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'productos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedore()
    {
        return $this->belongsTo(\App\Models\Proveedore::class, 'proveedores_id', 'id');
    }
    
}
