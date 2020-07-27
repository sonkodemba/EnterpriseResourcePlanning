<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_categories', function (Blueprint $table) {
            $table->id();
            $table -> string('code') -> unique();
            $table -> string('name') -> unique();
            $table -> integer('duration') -> unsigned();
            $table -> longText('descriptions') -> nullable();
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
        Schema::dropIfExists('employment_caregories');
    }
}
