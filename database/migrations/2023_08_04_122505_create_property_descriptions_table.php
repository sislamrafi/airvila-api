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
        Schema::create('property_descriptions', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->text('summary')->nullable();
            $table->text('place_is_great_for')->nullable();
            $table->text('about_place')->nullable();
            $table->text('guest_can_access')->nullable();
            $table->text('interaction_guests')->nullable();
            $table->text('other')->nullable();
            $table->text('about_neighborhood')->nullable();
            $table->text('get_around')->nullable();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_descriptions');
    }
};
