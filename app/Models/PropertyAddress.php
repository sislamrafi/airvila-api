<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'address_line_1',
        'address_line_2',
        'latitude',
        'longitude',
        'city',
        'state',
        'country',
        'postal_code',
    ];
}
