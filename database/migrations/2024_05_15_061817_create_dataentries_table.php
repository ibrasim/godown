<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataentries', function (Blueprint $table) {
            $table->id();
            $table->string('billno')->nullable();     
            $table->date('bill_date')->nullable();     
            $table->integer('suppid'); 
            $table->integer('custid'); 
            $table->integer('itmeno'); 
            $table->string('unit')->nullable();     
            $table->string('packing')->nullable();        
            $table->integer('qty');
            $table->string('bill_desc');  
			$table->string('act_desc')->nullable();     
			$table->float('rate');
			$table->float('act_rate')->nullable();     
            $table->float('total');
			$table->string('brand')->nullable();       
            $table->string('model')->nullable();       
            $table->string('size')->nullable();     
            $table->string('grno')->nullable();      
			$table->string('boxno')->nullable();      
			$table->string('hscode')->nullable();     
			$table->string('hs_desc')->nullable();     
			$table->string('remarks')->nullable();     
			$table->string('received')->nullable();     
			$table->string('packed')->nullable();     
			$table->string('dispatched')->nullable();     
			$table->string('shipped')->nullable();     
            $table->string('user'); 
            $table->date('entry_date'); 
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
        Schema::dropIfExists('dataentries');
    }
}
