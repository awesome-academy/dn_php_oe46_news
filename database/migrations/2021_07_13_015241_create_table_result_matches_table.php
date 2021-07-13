<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableResultMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_matches', function (Blueprint $table) {
            $table->id();
            $table->integer('score_team1');
            $table->integer('score_team2');
            $table->foreignId('cate_id')->constrained('categories_post');
            $table->foreignId('match_id')->constrained('matches');
            $table->foreignId('idplayer_id')->constrained('players');
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
        Schema::dropIfExists('result_matches');
    }
}
