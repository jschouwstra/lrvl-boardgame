<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamegroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamegroups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            //
            $table->integer('user_id')->unsigned();//oneToMany

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gamegroups');
    }
}
