<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('certificate_no');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('contract_id');
            $table->string('bill_id');
            $table->string('issuer_name');
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
        Schema::drop('payment_certificates');
    }
}
