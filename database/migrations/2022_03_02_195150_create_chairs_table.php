<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairsTable extends Migration
{
    public function up(): void
    {
        Schema::create('chairs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')
                ->on('rooms')
                ->references('id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chairs');
    }
}
