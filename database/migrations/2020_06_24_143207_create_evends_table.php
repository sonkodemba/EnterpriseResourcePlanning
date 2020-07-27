<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evends', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('user_id') -> unsigned();
            $table -> bigInteger('meter_num') ->unsigned();
            $table -> string('meter_name');
            $table -> bigInteger('generated_token') -> unsigned();
            $table -> string('payment_type');
            $table -> decimal('amount',8,2) -> unsigned();
            $table -> decimal('transaction_Fee',8,2) -> unsigned();
            $table -> decimal('eSMS_receipt_Fee',8,2) -> unsigned();
            $table -> decimal('share', 8, 2) -> unsigned();
            $table -> foreign('user_id') -> references('staff_id') -> on('users');
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
        Schema::dropIfExists('evends');
    }
}
