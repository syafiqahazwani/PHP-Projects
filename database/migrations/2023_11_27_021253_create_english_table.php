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
        Schema::create('english', function (Blueprint $table) {
            $table->id();
            $table->string('Image'); 
            $table->string('TitleName');
            $table->string('MainCharacterCast');
            $table->string('EpisodeMovie');
            $table->string('ListOfEpisodeMovie');
            $table->string('GenreCategory');
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
        Schema::dropIfExists('english');
    }
};
