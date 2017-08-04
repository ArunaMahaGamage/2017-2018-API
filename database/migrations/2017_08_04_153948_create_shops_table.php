<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('shops', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('address');
            $table->timestamps();

            $table->primary('id');

        });

        Schema::table('shops', function (Blueprint $table) {
           $table->integer('product_id');
           $table->foreign('product_id')->references('id')->on('products');
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
        Schema::drop('shops');
    }
}
