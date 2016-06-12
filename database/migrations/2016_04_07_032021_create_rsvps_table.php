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
            // $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('first_name2');
            $table->string('last_name2');
            $table->string('email2');
            $table->string('first_name3');
            $table->string('last_name3');
            $table->string('email3');
            $table->string('first_name4');
            $table->string('last_name4');
            $table->string('email4');
            $table->string('first_name5');
            $table->string('last_name5');
            $table->string('email5');
            $table->string('message');
            $table->boolean('vote');
            $table->timestamps();

            // $table->foreign('user_id')
            //       ->references('id')
            //       ->on('users');
                  // ->onUpdate('cascade')->onDelete('restrict');

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
