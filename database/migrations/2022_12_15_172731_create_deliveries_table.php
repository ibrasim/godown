<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
      
 $table->string('customer')->nullable();
 $table->string('pkgs')->nullable();
 $table->string('boat')->nullable(); 
 $table->string('vehicleno')->nullable();
 $table->string('assignedtime')->nullable();
 $table->string('completetime')->nullable();
 $table->string('status')->nullable();
 $table->string('remarks')->nullable();

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
        Schema::dropIfExists('deliveries');
    }
}
