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
        'website_title',
        'navbar_logo',
        'navbar_products_title',
        'navbar_about_title',
        'navbar_team_title',
        'navbar_contact_title',
        'instagram_link',
        'contact_email',
        'lat',
        'lng',
        'phone_number',
        'footer_description',
        'footer_products_title',
        'footer_contact_title',
        'footer_quick_links_title',
        'footer_terms_and_conditions_title',
        'footer_privacy_policy_title',
        'footer_copyrights_title',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
