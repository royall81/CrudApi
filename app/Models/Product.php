<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'active', 'in_stock', 'body_text', 'vendor', 'product_type', 'template_suffix', 'tags'
    ];

    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            'categories_products',
            'product_id',
            'category_id');
    }
}
