<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->mediumText('notes');
            $table->dateTime('dueDate')->nullable();
            $table->timestamps();
            $table->string('status');
            $table->boolean('priority');


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->string('group');
            $table->foreign('group')->references('groupname')->on('groups')->onUpdate('cascade')->onDelete('cascade');            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
