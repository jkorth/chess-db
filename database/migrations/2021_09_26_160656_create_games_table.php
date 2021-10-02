<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->text('pgn');
            $table->string('site');
            $table->string('time_control');
            $table->string('white');
            $table->string('white_elo');
            $table->string('black');
            $table->string('black_elo');
            $table->string('opponent_type');
            $table->string('termination');
            $table->string('result');
            $table->dateTime('date_played');
            $table->foreignIdFor(User::class)->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('games');
    }
}
