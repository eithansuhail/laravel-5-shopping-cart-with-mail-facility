<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cartproducts', function(Blueprint $table)
        {
            $table->foreign('user_id', 'FK_cart_contains_many_products')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('product_id', 'FK_cart_product_products')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartproducts', function(Blueprint $table)
        {
            $table->dropForeign('FK_cart_contains_many_products');
            $table->dropForeign('FK_cart_product_products');
        });
    }

}
