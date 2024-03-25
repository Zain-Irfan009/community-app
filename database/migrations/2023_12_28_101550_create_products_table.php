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
            $table->id();
            $table->bigInteger('shopify_id')->nullable();
            $table->bigInteger('shop_id')->nullable();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('handle')->nullable();
            $table->longText('vendor')->nullable();
            $table->longText('type')->nullable();
            $table->longText('featured_image')->nullable();
            $table->longText('tags')->nullable();
            $table->longText('options')->nullable();
            $table->longText('status')->nullable();
            $table->longText('published_at')->nullable();
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
