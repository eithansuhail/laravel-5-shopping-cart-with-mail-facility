<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartproducts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('user_id', 100)->index('FK_cart_contains_many_products');
            $table->integer('product_id')->unsigned()->index('FK_cart_product_products');
            $table->integer('quantity')->unsigned()->default(1);
            $table->timestamps();

           
            $table->unique(array('user_id', 'product_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('cartproducts');
    }
}
