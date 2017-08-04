<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('id');
            $table->string('products');
            $table->string('date');
            $table->String('sum_total');
            $table->timestamps();

            $table->primary('id');
        });

        Schema::table('sales', function (Blueprint $table) {
           $table->integer('customer_id');
           $table->foreign('customer_id')->references('id')->on('customers');
        });
        Schema::table('sales', function (Blueprint $table) {
           $table->integer('product_id');
           $table->foreign('product_id')->references('id')->on('products');
        });
        Schema::table('sales', function (Blueprint $table) {
           $table->integer('shop_id');
           $table->foreign('shop_id')->references('id')->on('shops');
        });
        Schema::table('sales', function (Blueprint $table) {
           $table->integer('vendor_id');
           $table->foreign('vendor_id')->references('id')->on('vendors');
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
        Schema::drop('sales');
    }
}
