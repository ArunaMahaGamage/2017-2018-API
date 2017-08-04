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
        //
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id'); 
            $table->double('price');
            $table->string('type');
            $table->string('manufacturer');
            $table->timestamps();
            $table->primary('id');

        });

        Schema::table('products', function (Blueprint $table) {
           $table->integer('customer_id');

           $table->foreign('customer_id')->references('id')->on('customers');
        });
/*
        Schema::table('products', function (Blueprint $table) {
           $table->integer('shop_id');
           $table->foreign('shop_id')->references('id')->on('shops');
        });

        Schema::table('products', function (Blueprint $table) {
           $table->integer('sales_id');
           $table->foreign('sales_id')->references('id')->on('sales');
        });
        */
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('products');
    }
}
