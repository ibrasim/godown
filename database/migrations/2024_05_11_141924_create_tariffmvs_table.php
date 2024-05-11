<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffmvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariffmvs', function (Blueprint $table) {
            $table->id();
            $table->string('chapter'); 
            $table->string('sixdigit'); 
            $table->string('hscode'); 
            $table->string('desc'); 
            $table->string('unit'); 
            $table->string('mfnrate'); 
            $table->string('saftrate'); 
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
        Schema::dropIfExists('tariffmvs');
    }
}
