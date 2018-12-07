<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('contract_id');
            $table->unsignedInteger('user_id');
            $table->string('bill_no');
            $table->date('bill_date');
            $table->string('net_payment');
            $table->string('vat');
            $table->string('ait');
            $table->string('gross_payment');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bills');
    }
}
