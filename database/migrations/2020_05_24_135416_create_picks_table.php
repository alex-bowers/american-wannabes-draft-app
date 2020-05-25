<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picks', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('round');
            $table->tinyInteger('number');
            $table->year('year');
            $table->tinyInteger('owned_by');
            $table->tinyInteger('player_id')->nullable()->default(null);
            $table->timestamps();

            $table->index('round');
            $table->index('year');
            $table->index('owned_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picks');
    }
}
