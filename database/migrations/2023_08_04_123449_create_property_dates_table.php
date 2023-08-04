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
        Schema::create('property_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->enum('status', ['Available', 'Not available'])->default('Available');
            $table->integer('price')->default(0);
            $table->tinyInteger('min_stay')->default(0);
            $table->integer('min_day')->default(0);
            $table->date('date')->nullable();
            $table->string('color', 150)->nullable();
            $table->enum('type', ['calendar', 'normal'])->default('normal');
            $table->timestamps();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_dates');
    }
};
