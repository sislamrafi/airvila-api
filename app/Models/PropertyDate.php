<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDate extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'status',
        'price',
        'min_stay',
        'min_day',
        'date',
        'color',
        'type'
       
    ];
}
