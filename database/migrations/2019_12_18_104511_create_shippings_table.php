<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
             $table->bigIncrements('shipping_id');
            $table->string('name');
            $table->string('company_name');
            $table->string('phone');
            $table->string('email')->unique();
            
            $table->text('address');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('country_id')->on('countries')->onDelete('cascade');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade');

            $table->string('postal_code');

            $table->rememberToken();
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
        Schema::dropIfExists('shippings');
    }
}
