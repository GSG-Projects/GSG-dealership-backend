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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_model_id')->constrained('car_models')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brand')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('base_price', 10, 2);
            $table->string('warranty', 64);
            $table->string('environmental_class', 32);
            $table->boolean('availability')->default(true);
            $table->integer('engine_capacity');
            $table->string('fuel_type', 64);
            $table->integer('power_kw');
            $table->string('transmission', 64);
            $table->string('color', 64);
            $table->integer('width');
            $table->integer('length');
            $table->integer('weight');
            $table->tinyInteger('seats_number');
            $table->tinyInteger('doors_number');
            $table->string('image', 256)->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
