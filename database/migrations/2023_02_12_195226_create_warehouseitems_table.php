<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouseitems', function (Blueprint $table) {
            $table->id();
            $table->integer('item_code'); 
            $table->string('item_name'); 
            $table->string('item_category'); 
            $table->integer('min_quantity'); 
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
        Schema::dropIfExists('warehouseitems');
    }
}
