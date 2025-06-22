<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsimpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsimps', function (Blueprint $table) {
        $table->id();
        $table->string('hscode')->nullable(); 
        $table->string('hsdescrip')->nullable(); 
        $table->string('descript')->nullable(); 
        $table->string('consig')->nullable();   
        $table->float('qty');  
        $table->string('unit')->nullable();   
        $table->float('unit_price_mvr')->nullable();   
        $table->string('impyear'); 
        $table->string('impmonth'); 
        $table->string('supplier')->nullable();   
        $table->string('unitqty')->nullable();    
        $table->string('pack')->nullable();   
        $table->float('pricefor')->nullable();   
        $table->float('pricmvr')->nullable();     
        $table->string('cur');
        $table->string('transport')->nullable();   
        $table->string('details')->nullable();   
        $table->string('detail2')->nullable();  
        $table->string('detail3')->nullable();  
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
        Schema::dropIfExists('itemsimps');
    }
}
