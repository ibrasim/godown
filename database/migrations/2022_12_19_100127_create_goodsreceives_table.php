<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsreceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodsreceives', function (Blueprint $table) {
            $table->id();

            $table->integer('customercode'); 
            $table->string('customername'); 
            $table->integer('suppliercode')->nullable(); ;
            $table->string('suppliername')->nullable(); ;  
            $table->string('deliverystaffname')->nullable();   
            $table->string('deliverystaffid')->nullable();   
            $table->string('modeoftransport')->nullable();   
            $table->date('receivedate');  
            $table->time('receivetime');    
            $table->string('cargotype')->nullable();
            $table->string('packagetype')->nullable();      
            $table->integer('noofpkgs');
            $table->float('weight'); 
            $table->string('staff'); 
            $table->string('location'); 
            $table->string('status')->nullable();       
            $table->integer('n1')->nullable();       
            $table->integer('n2')->nullable();       
            $table->integer('n3')->nullable();       
            $table->float('fl1')->nullable();       
            $table->float('fl2')->nullable();       
            $table->float('fl3')->nullable();       
            $table->string('fl4')->nullable();       
            $table->string('f2')->nullable();       
            $table->string('f3')->nullable();       
            $table->string('f4')->nullable();       
            $table->string('f5')->nullable();       
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
        Schema::dropIfExists('goodsreceives');
    }
}
