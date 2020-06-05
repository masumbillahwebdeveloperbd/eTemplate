<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->double('order_total', 8, 2);
            $table->tinyInteger('status');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('payment_id')->on('payments')->onDelete('cascade');
            $table->unsignedBigInteger('shipping_id');
            $table->foreign('shipping_id')->references('shipping_id')->on('shippings')->onDelete('cascade');
            $table->unsignedBigInteger('shipper_id');
            $table->foreign('shipper_id')->references('shipper_id')->on('shippers')->onDelete('cascade');

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
        Schema::dropIfExists('table_orders');
    }
}
