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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('documentation_id')->unsigned();
            $table->bigInteger('booking_id')->unsigned();

            $table->string('destination');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('documentation_id')->references('id')->on('documentations')->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('booking_id')->references('id')->on('bookings')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            $table->dropForeign(['documentation_id']);
            $table->dropColumn('documentatation_id');

            $table->dropForeign(['booking_id']);
            $table->dropColumn('booking_id');
        });
        Schema::dropIfExists('trips');
    }
};
