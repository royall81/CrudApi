<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'meta_title', 'meta_description', 'content', 'status'
    ];

    public function products()
    {
       return $this->belongsToMany(
            Product::class,
            'categories_products',
            'category_id',
            'product_id');
    } 
}
