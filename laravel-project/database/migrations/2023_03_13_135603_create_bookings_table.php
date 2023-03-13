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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('flight_id')->unsigned();
            $table->bigInteger('airline_id')->unsigned();
            $table->timestamps();

            $table->foreign('flight_id')->references('id')->on('flights')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('airline_id')->references('id')->on('airlines')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
