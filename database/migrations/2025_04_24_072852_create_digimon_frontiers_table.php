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
        Schema::create('digimon_frontiers', function (Blueprint $table) {
            $table->id();
            $table->string('character_img');
            $table->string('character_name');
            $table->string('digivise_img');
            $table->string('digivise_name');
            $table->string('spirit_img');
            $table->string('spirit_name');
            $table->string('human_evo_img');
            $table->string('human_evo_name');
            $table->string('adult_evo_img');
            $table->string('adult_evo_name');
            $table->string('perfect_evo_img');
            $table->string('perfect_evo_name');
            $table->string('fusion_evo_img');
            $table->string('fusion_evo_name');
            $table->string('ultimate_evo_img');
            $table->string('ultimate_evo_name');
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
        Schema::dropIfExists('digimon_frontiers');
    }
};
