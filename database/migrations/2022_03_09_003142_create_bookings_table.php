<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->on('users')
                ->references('id');
             $table->unsignedBigInteger('show_id');
            $table->foreign('show_id')
                ->on('shows')
                ->references('id');
             $table->unsignedBigInteger('chair_id');
            $table->foreign('chair_id')
                ->on('chairs')
                ->references('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
