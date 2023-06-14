<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'photo',
        'name',
        'subtext',
        'description',
        'supplement_facts',
        'suggested_use',
        'resources',
        'price'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }
}
