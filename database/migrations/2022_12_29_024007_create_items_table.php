<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->integer('itemcode'); 
        $table->string('itemname'); 
        $table->string('hscode')->nullable(); 
        $table->string('hsdescription')->nullable(); 
        $table->string('ldescription1')->nullable(); 
        $table->string('ldescription2')->nullable();  
        $table->string('brand')->nullable();   
        $table->string('packing')->nullable();   
        $table->string('unit')->nullable();   
        $table->string('unitnos');  
        $table->string('origin');    
        $table->date('expdate')->nullable();
        $table->string('image')->nullable();      
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
        Schema::dropIfExists('items');
    }
}
