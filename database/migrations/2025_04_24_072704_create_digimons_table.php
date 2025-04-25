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
        Schema::create('digimons', function (Blueprint $table) {
            $table->id();
            $table->string('character_img');
            $table->string('character_name');
            $table->string('digivise_img');
            $table->string('digivise_name');
            $table->string('creast_img');
            $table->string('creast_name');
            $table->string('baby_evo_img');
            $table->string('baby_evo_name');
            $table->string('child_evo_img');
            $table->string('child_evo_name');
            $table->string('adult_evo_img');
            $table->string('adult_evo_name');
            $table->string('perfect_evo_img');
            $table->string('perfect_evo_name');
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
        Schema::dropIfExists('digimons');
    }
};
