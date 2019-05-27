<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailworks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('contract_id');
            $table->unsignedInteger('user_id');
            $table->text('detail_work_form_component_1')->nullable();
            $table->string('detail_work_form_component_1_value')->nullable();
            $table->text('detail_work_form_component_2')->nullable();
            $table->string('detail_work_form_component_2_value')->nullable();
            $table->text('detail_work_form_component_3')->nullable();
            $table->string('detail_work_form_component_3_value')->nullable();
            $table->string('lead_partner_name')->nullable();
            $table->string('jvca_lead_partner_work_form_component_1')->nullable();
            $table->string('jvca_lead_partner_work_form_component_1_value')->nullable();
            $table->string('jvca_lead_partner_work_form_component_2')->nullable();
            $table->string('jvca_lead_partner_work_form_component_2_value')->nullable();
            $table->string('jvca_lead_partner_work_form_component_3')->nullable();
            $table->string('jvca_lead_partner_work_form_component_3_value')->nullable();
            $table->string('co_partner1_name')->nullable();
            $table->string('jvca_co_partner1_work_form_component_1')->nullable();
            $table->string('jvca_co_partner1_work_form_component_1_value')->nullable();
            $table->string('jvca_co_partner1_work_form_component_2')->nullable();
            $table->string('jvca_co_partner1_work_form_component_2_value')->nullable();
            $table->string('jvca_co_partner1_work_form_component_3')->nullable();
            $table->string('jvca_co_partner1_work_form_component_3_value')->nullable();


            $table->string('co_partner2_name')->nullable();
            $table->string('jvca_co_partner2_work_form_component_1')->nullable();
            $table->string('jvca_co_partner2_work_form_component_1_value')->nullable();
            $table->string('jvca_co_partner2_work_form_component_2')->nullable();
            $table->string('jvca_co_partner2_work_form_component_2_value')->nullable();
            $table->string('jvca_co_partner2_work_form_component_3')->nullable();
            $table->string('jvca_co_partner2_work_form_component_3_value')->nullable();

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
        Schema::dropIfExists('detailworks');
    }
}
