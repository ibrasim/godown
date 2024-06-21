<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestorders', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');     
            $table->string('hscode');     
            $table->string('brand')->nullable();     
            $table->string('unit')->nullable();     
            $table->string('packing')->nullable();     
            $table->string('category')->nullable();          
            $table->float('reqested_qty');     
            $table->float('approved_qty')->nullable();     
            $table->float('purchased')->nullable();    
			$table->float('unit_price')->nullable();     
            $table->float('total_price')->nullable();     
            $table->string('req_date_time_by');     
            $table->string('approve_date_time_by')->nullable();     
            $table->string('purchase_date_time_by')->nullable();     
            $table->string('receive_date_time_by')->nullable();     
            $table->string('supplier')->nullable();     
            $table->string('supp_contact')->nullable();     
            $table->string('remarks')->nullable();     
            $table->date('f1')->nullable();       
	        $table->string('f2')->nullable();       
            $table->float('f3')->nullable();   
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
        Schema::dropIfExists('requestorders');
    }
}
