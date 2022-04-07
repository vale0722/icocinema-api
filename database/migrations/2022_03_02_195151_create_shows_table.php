<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    public function up(): void
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->date('show_day');
            $table->string('show_hour');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')
                ->on('rooms')
                ->references('id');
            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')
                ->on('movies')
                ->references('id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
}
