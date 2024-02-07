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
        Schema::create('vehicle_bookings', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id',);
                $table->integer('shuttle_id');
                $table->string('from');
                $table->string('to');
                $table->string('name');
                $table->string('type');
                $table->integer('people');
                $table->string('date');
                $table->integer('price');
                $table->string('img')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_bookings');
    }
};
