<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('office_memo')->nullable();
            $table->date('memo_date')->nullable();
            $table->string('peoffice_id')->nullable();
            $table->string('circle_id')->nullable();
            $table->string('zone_id')->nullable();
            $table->string('others')->nullable();
            $table->text('name_of_works');
            $table->string('contract_no')->nullable();
            $table->string('egp_id')->nullable();
            $table->string('contractors_legal_title')->nullable();
            $table->text('contractors_contact_details')->nullable();
            $table->text('contractorstrade_license_details')->nullable();
            $table->string('noa_reference');
            $table->date('noa_date')->nullable();
            $table->integer('original_contract_price')->nullable();
            $table->integer('executed_contract_price')->nullable();
            $table->date('contract_date_of_commencement')->nullable();
            $table->date('contract_date_of_completion')->nullable();
            $table->date('actual_date_of_commencement')->nullable();
            $table->date('actual_contract_date_of_completion')->nullable();
            $table->integer('days_contract_period_extended')->nullable();
            $table->integer('amount_bonus_early_completion')->nullable();
            $table->integer('amount_ld_delayed_completion')->nullable();
            $table->integer('physical_progress')->nullable();
            $table->integer('financial_progress')->nullable();
            $table->text('special_note')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contracts');
    }
}