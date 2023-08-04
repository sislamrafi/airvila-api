<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'cleaning_fee',
        'security_deposit',
        'extra_guest_fee',
        'weekend_pricing',
        'weekly_discount',
        'monthly_discount',
        'currency',
        'deleted_at',
    ];
}
