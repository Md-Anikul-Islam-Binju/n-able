<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'details',
        'event_date',
        'event_time',
        'image',
        'status',
    ];
}
