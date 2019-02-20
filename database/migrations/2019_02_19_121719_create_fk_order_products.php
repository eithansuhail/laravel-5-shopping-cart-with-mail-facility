<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkOrderProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_products', function(Blueprint $table)
        {
            $table->foreign('order_id', 'FK_order_product_products')->references('id')->on('order_users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('product_id', 'FK_product_products')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_products', function(Blueprint $table)
        {
            $table->dropForeign('FK_order_product_products');
            $table->dropForeign('FK_product_products');
        });
    }

}
