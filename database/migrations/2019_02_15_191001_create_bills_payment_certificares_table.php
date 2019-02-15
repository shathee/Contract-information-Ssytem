<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsPaymentCertificaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_payment_certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bill_id')->unsigned();
            $table->integer('certificate_id')->unsigned();
            //$table->timestamps();
            // $table->foreign('bill_id')->references('id')->on('bills');
            // $table->foreign('certificate_id')->references('id')->on('payment_certificates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills_payment_certificates');
    }
}
