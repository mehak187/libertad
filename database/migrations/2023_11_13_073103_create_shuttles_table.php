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
        Schema::create('shuttles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from',);
            $table->string('to');
            $table->string('passengers');
            $table->integer('price',);
            $table->string('vehicle');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shuttles');
    }
};
