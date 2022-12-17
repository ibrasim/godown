<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('customer'); 
            $table->string('vendor'); 
            $table->string('goods'); 
            $table->integer('qty'); 
            $table->float('weight'); 
            $table->string('sorteddt')->nullable(); 
            $table->string('sendforshipdt')->nullable(); 
            $table->string('shhippeddt')->nullable(); 
            $table->string('arrivaldt')->nullable();                                
            $table->string('status')->nullable(); 
            $table->string('user')->nullable(); 
            $table->string('packaging')->nullable(); 
            $table->string('specialcargo')->nullable(); 
            $table->string('remarks')->nullable(); 
            $table->string('detail1')->nullable(); 
            $table->string('detail2')->nullable(); 
            $table->string('detail3')->nullable(); 
            $table->string('detail4')->nullable(); 
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
        Schema::dropIfExists('trackings');
    }
}
