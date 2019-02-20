<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function(Blueprint $table){
             $table->increments('id');
            $table->enum('category', ['mobiles', 'tvs','printers']);
            $table->string('modelno')->unique();
            $table->string('productname');
            $table->string('price');
            $table->string('mrp')->nullable();
            $table->string('inthebox');
            $table->string('imageurl');
            $table->string('yearoflaunch')->nullable();
            $table->text('description_1', 655)->nullable();
            $table->text('description_2', 655)->nullable();
            $table->text('description_3', 655)->nullable();
            $table->text('description_4', 655)->nullable();
            $table->text('description_5', 655)->nullable();
            $table->text('description_long', 65535)->nullable();
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
