<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsvpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsvps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('restrictions');
            $table->string('first_name2');
            $table->string('last_name2');
            $table->string('email2');
            $table->string('restrictions2');
            $table->string('first_name3');
            $table->string('last_name3');
            $table->string('email3');
            $table->string('restrictions3');
            $table->string('first_name4');
            $table->string('last_name4');
            $table->string('email4');
            $table->string('restrictions4');
            $table->string('first_name5');
            $table->string('last_name5');
            $table->string('email5');
            $table->string('restrictions5');
            $table->integer('kids')->unsigned();
            $table->boolean('vote');
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
        Schema::drop('rsvps');
    }
}
