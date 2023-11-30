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
        Schema::create('spayments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id');
            $table->integer('amount');
            $table->string('currency');
            $table->string('stripe_token');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spayments');
    }
};
