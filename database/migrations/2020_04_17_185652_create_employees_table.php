<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table ->bigInteger('staff_id')->unique()->unsigned();
            $table ->string('email')->unique();
            $table -> bigInteger('employee_education_id')->unsigned();
            $table -> string('education');
            $table -> string('address');
            $table -> integer('telephone_num') -> unsigned();
            $table -> mediumText('image');
            $table -> bigInteger('department_id')->unsigned();
            $table ->bigInteger('designation_id')->unsigned();
            $table -> foreign('employee_education_id') ->references('id')->on('employee_education');
            $table -> foreign('department_id')->references('id')->on('departments');
            $table -> foreign('designation_id') ->references('id')->on('designations');
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
        Schema::dropIfExists('employees');
    }
}
