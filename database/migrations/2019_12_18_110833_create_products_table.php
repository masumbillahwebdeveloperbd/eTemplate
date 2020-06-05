<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('name');
            $table->string('slug');
            $table->integer('quantity');
            $table->double('purchase_price', 8, 2);
            $table->double('sell_price', 8, 2);
            $table->text('short_description');
            $table->longText('long_description');
            $table->integer('re_order_level');
            $table->tinyInteger('publication_status');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('menufacture_id');
            $table->foreign('menufacture_id')->references('menufacture_id')->on('menufactures')->onDelete('cascade');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
}
