<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table -> string('name') -> unique();
            $table -> string('code') -> unique();
            $table ->longText('descriptions')->nullable();
//            $table -> bigInteger('employee_id')-> unsigned();
            $table -> decimal('budget',8,2)->unsigned()-> nullable();
            $table -> integer('duration')->unsigned();
            $table -> bigInteger('status_id')->unsigned();
//            $table -> bigInteger('user_id')->unsigned();
            $table -> bigInteger('company_id')->unsigned();
//            $table ->foreign('user_id') -> references('id')->on('users');
//            $table -> foreign('employee_id') -> references('id') -> on('employees');
            $table ->foreign('company_id') -> references('id')->on('companies');
            $table -> foreign('status_id') -> references('id')->on('statuses');
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
        Schema::dropIfExists('projects');
    }
}
