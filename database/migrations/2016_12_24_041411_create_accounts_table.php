<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('user_id')->nullable(false);
            $table->bigInteger('amount');

            $table->string('currency')->default('CNY');
            $table->string('type')->nullable(false);

            $table->timestamps();
        });
    }
//t.bigint  :user_id, null: false, comment:'用户id'
//
//t.bigint  :amount,  default: 0, comment: '账户金额'
//
//t.string  :currency, default: 'CNY', comment: '货币类型'
//t.string  :type, null: false, comment: '账户类型'
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
