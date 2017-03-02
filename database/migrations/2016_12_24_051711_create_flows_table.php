<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flows', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('src_account_id')->nullable(false);
            $table->bigInteger('tar_account_id')->nullable(false);

            $table->string('flowable')->polymorphic(true);

            $table->string('flowable_act')->nullable(false);

            $table->integer('amount')->nullable(false);
            $table->string('desc');

            $table->timestamps();
        });
    }
//t.bigint  :src_account_id, null: false ,comment: '转出账户id'
//t.bigint  :tar_account_id, null: false ,comment: '目标账户id'
//t.references :flowable, polymorphic: true, type: :bigint, null: false
//
//t.string  :flowable_act, null: false
//
//t.integer :amount, null: false ,comment: '账户流动金额'
//
//t.string  :desc ,comment: '预留字段'
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flows');
    }
}
