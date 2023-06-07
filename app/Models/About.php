<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'hero_description',
        'hero_heading',
        'who_we_are_title',
        'who_we_are_description',
        'our_mission_title',
        'our_mission_description',
        'our_company_title',
        'our_company_description',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
