<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashDepositeSlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_deposite_slips', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('bank_id') -> unsigned();
            $table -> bigInteger('slip_num') -> unsigned() -> unique();
            $table -> integer('account_num') -> unsigned();
            $table -> string('account_holder_name');
            $table -> string('curency_type') ->default('GMD');
            $table -> decimal('amount',8,2);
            $table -> bigInteger('depositor_id') -> unsigned();
            $table -> foreign('depositor_id') -> references('staff_id') -> on('users');
            $table -> foreign('bank_id') -> references('id') -> on('banks');
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
        Schema::dropIfExists('cash_deposite_slips');
    }
}
