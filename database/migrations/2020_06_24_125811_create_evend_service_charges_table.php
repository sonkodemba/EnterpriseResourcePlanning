<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvendServiceChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evend_service_charges', function (Blueprint $table) {
            $table -> decimal('from',8,2) ->unique() -> unsigned();
            $table -> decimal('to','8','2')->unique() -> unsigned();
            $table -> decimal('transactionFee', 8,2) ->unique()-> unsigned();
            $table -> decimal('eSMS_receipt_Fee')->unique() -> unsigned();
            $table -> decimal('cashpower')->unique() -> unsigned();
            $table -> longText('descriptions') -> nullable();
            $table -> primary(['from','to']);
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
        Schema::dropIfExists('evend_service_charges');
    }
}
