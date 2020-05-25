<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_teams', function (Blueprint $table) {
            $table->id();
            $table->string('team', 50);
            $table->string('nickname', 50);
            $table->string('abbreviation', 10);
            $table->string('logo');
            $table->string('sport', 50);
            $table->timestamps();

            $table->index('sport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_teams');
    }
}
