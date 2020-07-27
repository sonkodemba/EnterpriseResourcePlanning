<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_collections', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('cashier_id') -> unsigned();
            $table -> integer('machine_id') ->unsigned();
            $table -> integer('shift_num') ->unsigned();
            $table -> bigInteger('collector_id') -> unsigned();
            $table -> decimal('amount_to_reversed', 8,2) -> unsigned();
            $table -> decimal('amount_collected',8,2) ->unsigned(); //amount on end of shit
            $table -> decimal('amount_to_bank',8,2) -> unsigned();
            $table -> foreign('cashier_id') -> references('staff_id') -> on('users');
            $table -> foreign('collector_id') -> references('staff_id') -> on('users');
            $table -> longText('descriptions') -> nullable();
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
        Schema::dropIfExists('cash_collections');
    }
}
