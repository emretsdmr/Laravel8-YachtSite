<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYachtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yachts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('type');
            $table->string('lenghtoverall');
            $table->string('engine');
            $table->integer('yearbuilt');
            $table->string('hull');
            $table->string('beam');
            $table->string('sails');
            $table->string('cabins');
            $table->string('fuelcapacity');
            $table->string('draft');
            $table->string('generator');
            $table->string('crew');
            $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('yachts');
    }
}
