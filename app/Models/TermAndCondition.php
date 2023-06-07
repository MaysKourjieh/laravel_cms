<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermAndCondition extends Model
{
    use HasFactory;

    protected $table = 'terms_and_conditions';

    protected $fillable = [
        'title',
        'description',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
