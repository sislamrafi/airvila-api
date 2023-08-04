<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {

            $table->id();
            $table->string('property_no', 191)->nullable();
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->string('url_name', 100)->nullable();
            $table->string('co_host_name', 191)->nullable();
            $table->unsignedInteger('co_host_phone')->nullable();
            $table->tinyInteger('bedrooms')->nullable();
            $table->text('room_details')->nullable();
            $table->tinyInteger('beds')->nullable();
            $table->unsignedInteger('bed_type')->nullable();
            $table->double('bathrooms', 8, 2)->nullable();
            $table->unsignedInteger('balcony')->nullable();
            $table->unsignedInteger('kitchen')->nullable();
            $table->unsignedInteger('living_room')->nullable();
            $table->unsignedInteger('dining_room')->nullable();
            $table->unsignedInteger('car_parking')->nullable();
            $table->unsignedInteger('pet_capacity')->nullable();
            $table->string('amenities', 191)->nullable();
            $table->unsignedInteger('property_type')->default(0);
            $table->unsignedInteger('space_type')->default(0);
            $table->tinyInteger('accommodates')->nullable();
            $table->string('listing_size', 191)->nullable();
            $table->year('property_established')->nullable();
            $table->unsignedInteger('floors')->nullable();
            $table->string('listing_floors', 191)->nullable();
            $table->string('property_name_number', 191)->nullable();
            $table->string('wifi_name', 191)->nullable();
            $table->string('wifi_password', 191)->nullable();
            $table->string('door_pass_code', 191)->nullable();
            $table->string('door_others', 191)->nullable();
            $table->enum('booking_type', ['instant', 'request'])->default('request');
            $table->string('cancellation', 50)->default('Flexible');
            $table->enum('status', ['Unlisted', 'Listed', 'On Progress'])->default('On Progress');
            $table->enum('properties_status', ['Unlisted', 'Listed', 'On Progress'])->default('On Progress');
            $table->tinyInteger('recomended')->nullable();
            $table->string('checkin_time', 191)->nullable();
            $table->time('checkout_time')->nullable();
            $table->unsignedInteger('cleaning_frequency')->nullable();
            $table->time('cleaning_time')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->time('cut_off_time')->nullable();
            $table->unsignedInteger('preparation_time')->default(0);
            $table->timestamps();

          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
