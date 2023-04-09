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
        Schema::create('produk', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->string('nama',50);
            $table->integer('jumlah');
            $table->float('harga');
            $table->text('deskripsi')->nullable();

            //FK
            $table->string('user_id', 32);
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('sub_kategori_id', 32);
            $table->foreign('sub_kategori_id')->references('id')->on('sub_kategori');

            
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
        Schema::dropIfExists('produk');
    }
};
