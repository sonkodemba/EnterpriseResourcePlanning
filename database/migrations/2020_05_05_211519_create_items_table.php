<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table -> longText('barcode') -> unique() -> nullable();
            $table -> bigInteger('batch_id')->unsigned();
            $table ->bigInteger('item_category_id')->unsigned();
            $table -> integer('wingle_no')->unsigned()->nullable();
            $table -> bigInteger('sim_serial_no')->unsigned()->nullable();
            $table -> bigInteger('imei')->unsigned()->nullable()->unique();
            $table->string('item_serial') -> unique() ->nullable();
            $table -> bigInteger('model_id')->unsigned();
            $table ->bigInteger('account_no') -> unsigned()->nullable();
            $table -> macAddress('mac_address1')->unique()->nullable();
            $table -> macAddress('mac_address2')->unique()->nullable();
            $table -> macAddress('mac_address3')->unique()->nullable();
            $table ->bigInteger('employee_id')->unsigned();
            $table -> bigInteger('supplier_id')->unsigned();
            $table -> bigInteger('grn_num')->unsigned()->nullable();
            $table -> mediumText('grn')->nullable();
            $table -> bigInteger('processor_id')->unsigned()->nullable();

            /**
             * For Printer properties
             */
            $table -> string('catridge') -> unique()->nullable();

            $table -> foreign('processor_id') -> references('id')->on('processors');
            $table -> foreign('supplier_id') -> references('id')->on('suppliers');
            $table ->longText('descriptions')->nullable();
            $table ->foreign('model_id')->references('id')->on('item_models');
            $table -> foreign('batch_id')->references('id')->on('batches');
            $table -> foreign('item_category_id')->references('id')->on('item_categories');
            $table -> foreign('employee_id')->references('id')->on('employees');
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
        Schema::dropIfExists('items');
    }
}
