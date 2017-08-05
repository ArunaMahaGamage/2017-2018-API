<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductHasSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Product_has_sales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('Product_id');
            $table->integer('Product_Customer_id');
            $table->integer('sales_id');
            $table->integer('sales_vendor_id');
            $table->integer('sales_shops_id');
            $table->integer('sales_Customer_id');
            
            $table->timestamps();

        //    $table->primary('Product_id');
        //    $table->primary('Product_Customer_id');
        //    $table->primary('sales_id');
        //    $table->primary('sales_vendor_id');
        //    $table->primary('sales_shops_id');
        //    $table->primary('sales_Customer_id');
        });

        Schema::table('Product_has_sales', function (Blueprint $table) {
        //   $table->integer('product_id');
        //   $table->integer('product_Customer_id');
           $table->foreign('product_Customer_id')->references('customer_id')->on('products');
        });

        Schema::table('Product_has_sales', function (Blueprint $table) {
        //   $table->integer('product_id');
        //   $table->integer('product_Customer_id');
           $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('Product_has_sales', function (Blueprint $table) {
        //   $table->integer('sales_id');
           $table->foreign('sales_id')->references('id')->on('sales');
        });

        Schema::table('Product_has_sales', function (Blueprint $table) {
        //   $table->integer('sales_id');
           $table->foreign('sales_vendor_id')->references('vendor_id')->on('sales');
        });

        Schema::table('Product_has_sales', function (Blueprint $table) {
        //   $table->integer('sales_id');
           $table->foreign('sales_shops_id')->references('shop_id')->on('sales');
        });

        Schema::table('Product_has_sales', function (Blueprint $table) {
        //   $table->integer('sales_id');
           $table->foreign('sales_Customer_id')->references('customer_id')->on('sales');
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
        Schema::drop('Product_has_sales');
    }
}
