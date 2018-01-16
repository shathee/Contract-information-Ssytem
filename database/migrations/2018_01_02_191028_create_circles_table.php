<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCirclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zone_id')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('district_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('code')->nullable();
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
        Schema::drop('circles');
    }
}
