<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $fillable = [
        'title',
        'lat',
        'lng',
        'northeast_lat',
        'northeast_lng',
        'southwest_lat',
        'southwest_lng',
    ];
}
