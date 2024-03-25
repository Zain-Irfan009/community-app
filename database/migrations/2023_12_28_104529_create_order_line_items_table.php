<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_line_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shop_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->bigInteger('line_item_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('variant_id')->nullable();
            $table->string('title')->nullable();
            $table->string('variant_title')->nullable();
            $table->string('sku')->nullable();
            $table->string('vendor')->nullable();
            $table->double('quantity')->nullable();
            $table->double('price')->nullable();
            $table->double('total_discount')->nullable();
            $table->longText('properties')->nullable();
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
        Schema::dropIfExists('order_line_items');
    }
}
