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
            $table->foreignId('category_id')->constrained();
            $table->foreignId('sub_category_id')->constrained();
            $table->string('name');
            $table->string('slug');
            $table->decimal('sale_price');
            $table->decimal('price');
            $table->string('image');
            $table->integer('quantity')->default(0);
            $table->enum('status', ['Còn hàng', 'Hết hàng']);
            $table->text('description');
            $table->boolean('sale')->default(false);
            $table->boolean('hot')->default(false);
            $table->longText('content');
            $table->string('video');
            $table->text('info');
            $table->text('shipping_options');
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
