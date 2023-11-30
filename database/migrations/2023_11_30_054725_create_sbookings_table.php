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
        Schema::create('sbookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('shuttle_id');
            $table->integer('price');
            $table->integer('people');
            $table->string('type');
            $table->string('date');
            $table->string('pick_time');
            $table->string('pick_location');
            $table->string('drop_time');
            $table->string('drop_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sbookings');
    }
};
