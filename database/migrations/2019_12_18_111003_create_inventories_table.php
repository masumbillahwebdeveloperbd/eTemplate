<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('inventory_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->double('purchase_price', 8, 2);
            $table->date('purchasedate')->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
