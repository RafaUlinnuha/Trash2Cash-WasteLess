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
        Schema::create('produks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('nama_sub_kategori',255) -> nullable();
            $table->integer('jumlah');
            $table->float('harga');
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('slug');

            //FK
            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->foreignUuid('kategori_sampah_id')->references('id')->on('kategori_sampahs');
            
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
