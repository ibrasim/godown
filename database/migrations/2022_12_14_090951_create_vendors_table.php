<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendorname')->nullable();;
            $table->string('vendorregno') ->nullable();
            $table->string('vendoraddress')->nullable();;
            $table->string('vendorroad')->nullable(); 
            $table->string('vendodistrict')->nullable(); 
            $table->string('vendorarea')->nullable(); 
            $table->string('vendorcity')->nullable(); 
            $table->string('vendorctry')->nullable(); 
            $table->string('vendorzip')->nullable(); 
            $table->string('vendorprimarybuis')->nullable(); 
            $table->string('vendorcontactpersonsir')->nullable(); 
            $table->string('vendorcontactpersonfirst')->nullable(); 
            $table->string('vendorothername')->nullable(); 
            $table->string('vendorsocialaccount')->nullable(); 
            $table->string('vendormobile1')->nullable(); 
            $table->string('vendormobile2')->nullable(); 
            $table->string('vendoremail1')->nullable(); 
            $table->string('vendoremail2')->nullable(); 
            $table->string('vendorbank')->nullable(); 
            $table->string('vendoraccountno1')->nullable(); 
            $table->string('vendoraccountholdername1')->nullable(); 
            $table->string('vendorbank2')->nullable(); 
            $table->string('vendoraccountno2')->nullable(); 
            $table->string('vendoraccountholdername2')->nullable(); 
            $table->string('vendorwebsite')->nullable(); 
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
        Schema::dropIfExists('vendors');
    }
}
