<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $table = 'general';
    protected $fillable = [
        'title',
        'navbar_logo',
        'navbar_products_title',
        'navbar_about_title',
        'navbar_team_title',
        'navbar_contact_title',
    ];
}
