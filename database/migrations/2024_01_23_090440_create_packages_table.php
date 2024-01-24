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
        Schema::create('packages', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('nights');
                $table->integer('city');
                $table->text('des');
                $table->string('img');
                $table->text('sight_seeing');
                $table->text('include');
                $table->integer('price');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
