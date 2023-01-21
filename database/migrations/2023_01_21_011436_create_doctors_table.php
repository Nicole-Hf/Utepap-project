<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('phoneNumber')->nullable();
            $table->string('civilId')->nullable();
            $table->string('address')->nullable();
            $table->string('specialty')->nullable();
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('userId')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
