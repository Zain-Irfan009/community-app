<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shop_id')->nullable();
            $table->bigInteger('shopify_id')->nullable();
            $table->bigInteger('shopify_product_id')->nullable();
            $table->longText('title')->nullable();
            $table->longText('option1')->nullable();
            $table->longText('option2')->nullable();
            $table->longText('option3')->nullable();
            $table->longText('sku')->nullable();
            $table->boolean('requires_shipping')->nullable();
            $table->longText('fulfillment_service')->nullable();
            $table->longText('taxable')->nullable();
            $table->longText('image')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('compare_at_price')->nullable();
            $table->longText('weight')->nullable();
            $table->longText('grams')->nullable();
            $table->longText('weight_unit')->nullable();
            $table->bigInteger('inventory_item_id')->nullable();
            $table->bigInteger('quantity')->default(0)->nullable();
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
        Schema::dropIfExists('product_variants');
    }
}
