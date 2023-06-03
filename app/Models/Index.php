<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    protected $table = 'index';

    protected $fillable = [
        'title',
        'product_title',
        'product_description',
        'product_cta',
        'about_title',
        'about_subtitle',
        'about_heading',
        'about_description',
        'about_cta',
        'team_title',
        'team_subtitle',
        'contact_title',
        'contact_subtitle',
        'contact_submit_button_title',
    ];
}
