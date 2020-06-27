<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('position', 3);
            $table->tinyInteger('team')->nullable()->default(null);
            $table->integer('college')->nullable()->default(null);
            $table->tinyInteger('owned_by')->nullable()->default(null);
            $table->boolean('rookie')->default(false);
            $table->boolean('free_agent')->default(false);
            $table->boolean('recently_traded')->default(false);
            $table->timestamps();

            $table->index('position');
            $table->index('team');
            $table->index('college');
            $table->index('owned_by');
            $table->index('rookie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
