<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_trades', function (Blueprint $table) {
            $table->id();
            $table->integer('action_id');
            $table->integer('user_one');
            $table->integer('user_two');
            $table->json('user_one_receives_picks')->nullable()->default(null);
            $table->json('user_one_receives_players')->nullable()->default(null);
            $table->json('user_two_receives_picks')->nullable()->default(null);
            $table->json('user_two_receives_players')->nullable()->default(null);
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
        Schema::dropIfExists('action_trades');
    }
}
