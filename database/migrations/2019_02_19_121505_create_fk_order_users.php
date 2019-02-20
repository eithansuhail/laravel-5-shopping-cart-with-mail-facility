<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkOrderUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_users', function(Blueprint $table)
        {
            $table->foreign('user_id', 'FK_user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_users', function(Blueprint $table)
        {
            $table->dropForeign('FK_user');
            
        });
    }

}
