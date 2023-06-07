<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetricCard extends Model
{
    use HasFactory;

    protected $table = 'metric_cards';

    protected $fillable = [
        'title',
        'value'
    ];
}
