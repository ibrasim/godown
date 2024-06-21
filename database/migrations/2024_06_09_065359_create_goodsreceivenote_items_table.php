<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsreceivenoteItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodsreceivenote_items', function (Blueprint $table) {
            $table->id();
            $table->string('grn_no'); 
            $table->integer('item_no') ;  
            $table->float('weight');       
            $table->string('remarks')->nullable();    
            $table->float('length') ->nullable();   
            $table->float('width') ->nullable();   
            $table->float('height') ->nullable();   
            $table->float('cbm') ->nullable();   
            $table->string('pkg_no')->nullable();   
            $table->integer('n1')->nullable();       
            $table->float('fl1')->nullable();       
            $table->string('fl4')->nullable();       
            $table->string('f2')->nullable();       
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
        Schema::dropIfExists('goodsreceivenote_items');
    }
}
