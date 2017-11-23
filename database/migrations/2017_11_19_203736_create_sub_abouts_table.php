<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('about_id')->unsigned()->index();
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            $table->foreign('about_id')->references('id')->on('abouts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_abouts');
    }
}
