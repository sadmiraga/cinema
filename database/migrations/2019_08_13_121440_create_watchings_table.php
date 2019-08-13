<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watchings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //price
            $table->double('ticketPrice');

            // date and time of showing
            $table->timestamp('watchingTimestamp')->nullable();

            //foreign key from movies
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('watchings');
    }
}
