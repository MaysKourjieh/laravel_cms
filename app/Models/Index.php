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
        'carousel_1_heading',
        'carousel_1_subheading',
        'carousel_2_heading',
        'carousel_2_subheading',
        'carousel_3_heading',
        'carousel_3_subheading',
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

    protected $hidden = ['created_at', 'updated_at'];
}
