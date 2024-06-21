<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsreceivenotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodsreceivenotes', function (Blueprint $table) {
            $table->id();
            $table->string('grn_no'); 

            $table->integer('supp_id') ;  
            $table->integer('cust_id') ;  
            $table->integer('no_pkgs') ;  
            $table->integer('entry_staff_id') ;  
            $table->string('mode_trans') ->nullable();      
            $table->string('addit_info') ->nullable();      
            $table->string('deliv_name') ;  
            $table->string('deliv_id')->nullable();      
            $table->float('leng')->nullable();      
            $table->float('heigh')->nullable();           
         
            $table->float('cbm') ->nullable();   
            $table->float('width') ->nullable();   
            $table->float('height') ->nullable();   
            $table->float('cbm') ->nullable();   
            $table->string('location')->nullable();   
            $table->string('status')->nullable();   
            $table->integer('n1')->nullable();       
            $table->float('fl1')->nullable();       
            $table->string('fl4')->nullable();       
            $table->string('f2')->nullable();       
            $table->string('f3')->nullable();       
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
        Schema::dropIfExists('goodsreceivenotes');
    }
}
