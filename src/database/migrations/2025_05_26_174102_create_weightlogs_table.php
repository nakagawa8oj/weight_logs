<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weightlogs', function (Blueprint $table) {
            $table->id();
            $table->integer('target_weight');
            $table->integer('weight');
            $table->integer('date');
            $table->integer('calories');
            $table->integer('exircise_time'); 
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
        Schema::dropIfExists('weightlogs');
    }
}
