<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billentries', function (Blueprint $table) {
            $table->id();
            $table->string('billno')->nullable();     
            $table->date('bill_date')->nullable();     
            $table->string('grno')->nullable();      
            $table->string('hscode')->nullable();     
            $table->string('item_name'); 
            $table->integer('suppid'); 
            $table->integer('custid'); 
            $table->integer('itmeno'); 
            $table->string('unit')->nullable();     
            $table->string('packing')->nullable();        
            $table->integer('qty');
            $table->string('desc');  
            $table->string('brand')->nullable();       
            $table->string('model')->nullable();       
            $table->string('size')->nullable();     
            $table->float('rate');
            $table->float('total');
            $table->string('user'); 
            $table->date('entry_date'); 
	        $table->string('remarks')->nullable();     
            $table->string('f1')->nullable();       
            $table->string('f2')->nullable();       
            $table->string('f3')->nullable();       
            $table->string('f4')->nullable();      
            $table->string('precollect')->nullable();      
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
        Schema::dropIfExists('billentries');
    }
}
