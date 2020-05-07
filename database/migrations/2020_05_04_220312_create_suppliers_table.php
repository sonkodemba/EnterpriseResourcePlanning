<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table -> string('code')->unique();
            $table -> bigInteger('category_id')->unsigned();
            $table -> string('gppa_license_no') -> unique();
            $table -> string('trade_license_no') -> unique();
            $table -> mediumText('gppa_license')->nullable();
            $table -> mediumText('trade_license')->nullable();
            $table->longText('address')->nullable();
            $table -> integer('telephone')->unsigned();
            $table -> string('email') -> unique();
            $table -> longText('descriptions') -> nullable();
            $table -> foreign('category_id')->references('id')->on('supplier_categories');
            $table ->softDeletes();
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
        Schema::dropIfExists('suppliers');
    }
}
