<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('time');
            $table->integer('total');
            $table->unsignedBigInteger('u_id');
            $table->unsignedBigInteger('e_id');
            $table->boolean('verified')->default(false);
            $table->foreign('u_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('e_id')->references('id')->on('events')->onDelete('cascade');
            $table->timestamps();
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
