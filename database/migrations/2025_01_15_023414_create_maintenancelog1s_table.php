<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancelog1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenancelog1s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('block'); 
            $table->string('requested_by'); 
            $table->date('request_date');  
            $table->string('request_detail'); 
            $table->string('solution')->nullable(); 
            $table->string('contractor_contact')->nullable(); 
            $table->date('assign_date');  
            $table->date('finish_date');  
            $table->float('cost');             
            $table->string('status')->nullable(); 
            $table->string('remarks')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenancelog1s');
    }
}
