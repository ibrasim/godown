<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('shippingmark');
            $table->string('nickname') ->nullable();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('companyname')->nullable();
            $table->string('registration')->nullable();
            $table->string('address');
            $table->string('road')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->string('zipcode')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile');
            $table->string('email1');
            $table->string('email2')->nullable();
            $table->string('socialaccounts')->nullable();
            $table->string('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
