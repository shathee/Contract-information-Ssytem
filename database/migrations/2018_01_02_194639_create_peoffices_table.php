<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoffices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('zone_id')->nullable();
            $table->string('circle_id')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('district_id')->nullable();
            $table->string('postcode')->nullable();
            $table->string('phone')->nullable();
            $table->string('code')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peoffices');
    }
}
