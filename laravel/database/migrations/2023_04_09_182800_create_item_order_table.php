<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_order', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->integer('jumlah');


            //FK
            $table->string('produk_id', 32);
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->string('order_id', 32);
            $table->foreign('order_id')->references('id')->on('order');

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
        Schema::dropIfExists('item_order');
    }
};
