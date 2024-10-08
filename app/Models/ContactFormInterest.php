<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormInterest extends Model
{
    use HasFactory;

    protected $table = 'contact_form_interests';

    protected $fillable = [
        'title',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function contact_forms() {
        return $this->hasMany(ContactForm::class);
    }
}
