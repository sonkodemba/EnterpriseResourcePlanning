<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table -> string('name');
            $table -> longText('descriptions') -> nullable();
            $table -> integer('duration') -> unsigned();
//            $table -> bigInteger('user_id')->unsigned();
            $table -> bigInteger('status_id') -> unsigned();
            $table->bigInteger('project_id')->unsigned();
//            $table -> foreign('user_id') -> references('id')->on('users');
            $table -> foreign('status_id') -> references('id')->on('statuses');
            $table -> foreign('project_id') -> references('id')->on('projects');
            $table -> softDeletes();
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
        Schema::dropIfExists('tasks');
    }
}
