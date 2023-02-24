<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousestocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehousestocks', function (Blueprint $table) {
            $table->id();
            $table->integer('item_code'); 
            $table->integer('wharehouse_code'); 
            $table->string('wharehouse_name'); 
            $table->integer('qty'); 
            $table->integer('balance'); 
            $table->string('user'); 
            $table->string('f1')->nullable();       
            $table->string('f2')->nullable();       
            $table->string('f3')->nullable();       
            $table->string('f4')->nullable();      
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
        Schema::dropIfExists('warehousestocks');
    }
}
