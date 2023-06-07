<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'subtext',
        'description',
        'supplement_facts',
        'suggested_use',
        'resources',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
