<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gusers', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->string('office')->nullable();
            $table->string('designation')->nullable();
            $table->string('mobile')->nullable();
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
        Schema::drop('gusers');
    }
}
