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
        Schema::create('room_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('room');
            $table->unsignedInteger('students_id');
            $table->foreign('students_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
