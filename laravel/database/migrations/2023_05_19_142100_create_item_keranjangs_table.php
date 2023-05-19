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
        Schema::create('item_keranjangs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('jumlah');
            $table->timestamps();


            //FK
            $table->foreignUuid('produk_id')->references('id')->on('produks');
            $table->foreignUuid('keranjang_id')->references('id')->on('keranjangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_keranjangs');
    }
};
