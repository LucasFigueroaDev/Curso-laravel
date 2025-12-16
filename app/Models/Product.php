<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
        'image'
    ];

    public function category()
    {
        /**
         * Relación: un producto pertenece a una categoría.
         * La clave foránea es `category_id` en la tabla `products`,
         * que referencia al campo `id` de la tabla `categories`.
         */
        return $this->belongsTo(Category::class);
    }
}
