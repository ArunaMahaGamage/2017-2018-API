<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsHasProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('shops_has_Products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('shops_id');
            $table->integer('Product_id');
            $table->integer('Product_Customer_id');
            
            $table->timestamps();

        //    $table->primary('shops_id');
        //    $table->primary('Product_id');
        //    $table->primary('Product_Customer_id');
        });

        Schema::table('shops_has_Products', function (Blueprint $table) {
        //   $table->integer('shop_id');
           $table->foreign('shops_id')->references('id')->on('shops');
        });

        Schema::table('shops_has_Products', function (Blueprint $table) {
        //   $table->integer('Product_id');
           $table->foreign('Product_id')->references('id')->on('products');
        });

        Schema::table('shops_has_Products', function (Blueprint $table) {
        //   $table->integer('Product_id');
           $table->foreign('Product_Customer_id')->references('customer_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('shops_has_Products');
    }
}
