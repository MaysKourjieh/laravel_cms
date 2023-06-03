<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $table = 'contact_forms';

    protected $fillable = [
        'full_name',
        'email',
        'contact_form_interest_id',
        'message',
    ];

    public function contactFormInterest() {
        return $this->belongsTo(ContactFormInterest::class);
    }
}
