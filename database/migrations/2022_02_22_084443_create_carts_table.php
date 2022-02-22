<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->biginteger('product_id')->unsigned();
            // $table->biginteger('user_id')->unsigned();
            // $table->biginteger('totalprice');
            // $table->biginteger('quantity');
            // $table->foreign('productid')->on('carts')->references('id');
            // $table->foreign('user_id')->on('carts')->references('id');
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
        Schema::dropIfExists('carts');
    }
}
