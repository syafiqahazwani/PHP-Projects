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
        Schema::create('digimon02s', function (Blueprint $table) {
            $table->id();
            $table->string('character_img');
            $table->string('character_name');
            $table->string('digivise_img');
            $table->string('digivise_name');
            $table->string('armoregg1_img');
            $table->string('armoregg1_name');
            $table->string('armoregg2_img');
            $table->string('armoregg2_name');
            $table->string('baby_evo_img');
            $table->string('baby_evo_name');
            $table->string('child_evo_img');
            $table->string('child_evo_name');
            $table->string('adult_evo_img');
            $table->string('adult_evo_name');
            $table->string('armor1_evo_img');
            $table->string('armor1_evo_name');
            $table->string('armor2_evo_img');
            $table->string('armor2_evo_name');
            $table->string('dna_evo_img');
            $table->string('dna_evo_name');
            $table->string('dnaperfect_evo_img');
            $table->string('dnaperfect_evo_name');
            $table->string('dnaultimate_evo_img');
            $table->string('dnaultimate_evo_name');
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
        Schema::dropIfExists('digimon02s');
    }
};
