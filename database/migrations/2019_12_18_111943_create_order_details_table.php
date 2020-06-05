<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderDetails', function (Blueprint $table) {
            $table->bigIncrements('orderDetail_id');
            $table->string('name');
            $table->integer('quantity');
            $table->double('price', 8, 2);
            $table->double('discount', 8, 2);
            $table->double('total', 8, 2);
            $table->double('weight', 8, 2);
            $table->string('color');
            $table->double('width', 8, 2);
            $table->double('height', 8, 2);
            $table->string('size');
            $table->double('tax', 8, 2);
            $table->double('vat', 8, 2);
            $table->double('shipping_cost', 8, 2);
            $table->date('bill_date');
            $table->date('shipping_date');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('table_orders')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('orderDetails');
    }
}
