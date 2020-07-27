<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table -> bigInteger('staff_id') -> unsigned() -> unique();
             $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
             $table->string('password');
             $table -> bigInteger('user_category_id') ->unsigned();
             $table -> foreign('user_category_id')->references('id')->on('user_categories');
             $table -> foreign('staff_id') -> references('staff_id') -> on('employees');
            $table -> timestamp('current_login_at') -> nullable();
            $table -> ipAddress('current_login_ip') -> nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table -> timestamp('last_logout_at') -> nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
