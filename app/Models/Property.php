<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_no',
        'name',
        'slug',
        'url_name',
        'co_host_name',
        'co_host_phone',
        'bedrooms',
        'room_details',
        'beds',
        'bed_type',
        'bathrooms',
        'balcony',
        'kitchen',
        'living_room',
        'dining_room',
        'car_parking', 
        'pet_capacity',
        'amenities',
        'property_type',
        'space_type',
        'accommodates',
        'listing_size',
        'property_established',
        'floors',
        'listing_floors',
        'property_name_number',
        'wifi_name',
        'wifi_password',
        'door_pass_code',
        'door_others',
        'booking_type',
        'cancellation',
        'status',
        'properties_status',
        'recomended',
        'checkin_time',
        'checkout_time',
        'cleaning_frequency',
        'cleaning_time',
        'deleted_at',
        'cut_off_time',
        'preparation_time',
        
    ];


}
