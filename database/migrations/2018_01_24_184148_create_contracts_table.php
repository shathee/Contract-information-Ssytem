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
            $table->string('office_memo', 25)->nullable();
            $table->date('memo_date')->nullable();
            $table->string('project_id')->nullable();
           
            $table->string('peoffice_id')->nullable();
            $table->string('circle_id')->nullable();
            $table->string('zone_id')->nullable();
            $table->text('others')->nullable();
            $table->text('name_of_works');
            $table->string('contract_no')->nullable();
            $table->string('egp_id')->nullable();
            //$table->string('package_no')->nullable();
            $table->string('contractors_legal_title')->nullable();
            $table->text('contractors_contact_details')->nullable();
            $table->text('contractors_trade_license_details')->nullable();
            $table->string('noa_reference', 25);
            $table->date('noa_date')->nullable();
            $table->date('contract_date')->nullable();
            $table->double('original_contract_price')->unsigned()->nullable();
            $table->double('executed_contract_price')->nullable();
            $table->date('contract_date_of_commencement')->nullable();
            $table->date('contract_date_of_completion')->nullable();
            $table->date('actual_date_of_commencement')->nullable();
            $table->date('actual_contract_date_of_completion')->nullable();
            $table->string('days_contract_period_extended', 15)->default('N/A');
            $table->double('amount_bonus_early_completion')->nullable();
            $table->double('amount_ld_delayed_completion')->nullable();
            $table->double('physical_progress')->nullable();
            $table->double('financial_progress')->nullable();
            $table->text('special_note')->nullable();
            $table->text('commencement_id')->nullable();
            $table->integer('original_contract_completion_time')->nullable();
            $table->string('certificate_issued')->default('no');


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
        Schema::drop('contracts');
    }
}
