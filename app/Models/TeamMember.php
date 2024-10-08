<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $table = 'team_members';

    protected $fillable = [
        'full_name',
        'job',
        'description',
        'photo',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
