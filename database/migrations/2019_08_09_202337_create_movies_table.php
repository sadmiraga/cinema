<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('movieName');
            $table->double('movieDuration');
            $table->longText('description');
            $table->string('picture');
            $table->string('trailer');


            // is it movie for adults?
            $table->integer('over18')->default(0);
            // 1 - for older than 18
            // 0 - for everybody

            //zanr ID

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
        Schema::dropIfExists('movies');
    }
}
