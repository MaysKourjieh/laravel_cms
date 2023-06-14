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
        'carousel_1_photo',
        'carousel_2_heading',
        'carousel_2_subheading',
        'carousel_2_photo',
        'carousel_3_heading',
        'carousel_3_subheading',
        'carousel_3_photo',
        'product_title',
        'product_description',
        'product_cta',
        'products_photo',
        'about_title',
        'about_subtitle',
        'about_heading',
        'about_description',
        'about_cta',
        'about_photo',
        'team_title',
        'team_subtitle',
        'contact_title',
        'contact_subtitle',
        'contact_submit_button_title',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
