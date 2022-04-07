<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name',120)->unique();
            $table->string('duration',10);
            $table->text('description');
            $table->string('image');
            $table->string('min_age',10);
            $table->date('release_date');
            $table->string('thriller', 255);
            $table->unsignedBigInteger('genre_id');
            $table->timestamp('disabled_at')->nullable();
            $table->timestamps();

            $table->foreign('genre_id')
                ->on('genres')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
}
