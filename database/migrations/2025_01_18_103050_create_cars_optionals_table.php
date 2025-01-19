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
        Schema::create('car_optional', function (Blueprint $table) {
            $table->foreignId('car_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('optional_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->primary([ // Questo serve ad evitare che si crei una coppia identica di chiavi.
                'car_id',
                'optional_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_optional');
    }
};
