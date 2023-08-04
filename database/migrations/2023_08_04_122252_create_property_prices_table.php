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
        Schema::create('property_prices', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->integer('cleaning_fee')->default(0);
            $table->integer('guest_after')->default(0);
            $table->integer('guest_fee')->default(0);
            $table->integer('security_fee')->default(0);
            $table->integer('price')->default(0);
            $table->integer('weekend_price')->default(0);
            $table->integer('weekly_discount')->default(0);
            $table->integer('monthly_discount')->default(0);
            $table->string('currency_code', 10)->nullable();   
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_prices');
    }
};
