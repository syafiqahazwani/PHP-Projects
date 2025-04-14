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
        Schema::create('anime', function (Blueprint $table) {
            $table->id();
            $table->string('Image'); 
            $table->string('AnimeName');
            $table->string('AnimeMainCharacter');
            $table->string('DateAiring');
            $table->string('EpisodeSeries');
            $table->string('MovieSeries');
            $table->string('Status');
            $table->string('Rate');
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
        Schema::dropIfExists('anime');
    }
};
