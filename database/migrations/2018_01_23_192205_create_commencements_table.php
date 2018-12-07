<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommencementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commencements', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('contract_id');
            $table->string('commencement_memo_no')->nullable();
            $table->date('commencement_memo_date')->nullable();
            $table->string('contract_no')->nullable();
            $table->date('contract_commencement_date')->nullable();
            $table->date('insurance_policy_date')->nullable();
            $table->date('programme_date')->nullable();
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
        Schema::drop('commencements');
    }
}
