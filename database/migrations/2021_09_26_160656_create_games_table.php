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
            $table->string('result');
            $table->text('pgn');
            $table->string('platform');
            $table->string('time_control');
            $table->string('opponent_type');
            $table->string('opponent_name');
            $table->string('opponent_rating');
            $table->string('rating');
            $table->dateTime('date_played');
            $table->text('embed');
            $table->text('notes');
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
