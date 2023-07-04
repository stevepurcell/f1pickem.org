<?php

use App\Track;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->datetime('racedate');
            $table->datetime('qualidate');
            $table->string('name');
            $table->string('track');
            $table->string('country');
            $table->boolean('sprint');
            $table->boolean('complete');
            $table->foreignIdFor(Track::class);
            $table->softDeletes();
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
        Schema::dropIfExists('races');
    }
}
