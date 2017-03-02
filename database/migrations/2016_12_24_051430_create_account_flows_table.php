<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_flows', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('account_id')->nullable(false);
            $table->bigInteger('flow_id')->nullable(false);

            $table->bigInteger('before_amount')->nullable(false);
            $table->bigInteger('after_amount')->nullable(false);

            $table->timestamps();
        });
    }
//t.bigint  :account_id, null: false, comment: '账户id'
//t.bigint  :flow_id, null: false, comment: '流水id'
//
//t.bigint  :before_amount,  null: false, comment: '进账前的金额'
//t.bigint  :after_amount,   null: false, comment: '进账后的金额'
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_flows');
    }
}
