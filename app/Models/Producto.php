<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $cantidad_en_stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Ordencompra[] $ordencompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion', 'precio', 'cantidad_en_stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordencompras()
    {
        return $this->hasMany(\App\Models\Ordencompra::class, 'id', 'productos_id');
    }
    
}
