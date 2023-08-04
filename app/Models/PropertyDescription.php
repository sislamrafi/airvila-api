<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'summary',
        'place_is_great_for',
        'about_place',
        'guest_can_access',
        'interaction_guests',
        'other',
        'about_neighborhood',
        'get_around',
    ];
}
