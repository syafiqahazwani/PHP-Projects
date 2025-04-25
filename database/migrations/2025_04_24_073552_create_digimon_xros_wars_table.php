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
        Schema::create('digimon_xros_wars', function (Blueprint $table) {
            $table->id();
            $table->string('character_img'); 
            $table->string('character_name');
            $table->string('digivise_img');
            $table->string('digivise_name');
            $table->string('teamlogo_img');
            $table->string('teamlogo_name');
            $table->string('child_evo_img');
            $table->string('child_evo_name');
            $table->string('ultimate_evo_img');
            $table->string('ultimate_evo_name');
            $table->string('xros1_evo_img');
            $table->string('xros1_evo_name');
            $table->string('xros2_evo_img');
            $table->string('xros2_evo_name');
            $table->string('xros3_evo_img');
            $table->string('xros3_evo_name');
            $table->string('xros4_evo_img');
            $table->string('xros4_evo_name');
            $table->string('xros5_evo_img');
            $table->string('xros5_evo_name');
            $table->string('xros6_evo_img');
            $table->string('xros6_evo_name');
            $table->string('xros7_evo_img');
            $table->string('xros7_evo_name');
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
        Schema::dropIfExists('digimon_xros_wars');
    }
};
