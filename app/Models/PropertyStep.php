<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyStep extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'basics',
        'description',
        'location',
        'amenities',
        'photos',
        'pricing',
        'calendar', 
    ];
}
