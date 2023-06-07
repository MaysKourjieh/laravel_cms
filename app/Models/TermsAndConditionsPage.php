<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndConditionsPage extends Model
{
    use HasFactory;

    protected $table = 'terms_and_conditions_page';

    protected $fillable = [
        'heading',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
