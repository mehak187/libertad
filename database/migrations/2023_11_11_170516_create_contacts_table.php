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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('office_location');
            $table->text('map_location');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email1');
            $table->string('email2');
            $table->string('tripadvisor');
            $table->string('fb_link');
            $table->string('google');
            $table->string('yt_link');
            $table->string('insta_link');
            $table->text('des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
