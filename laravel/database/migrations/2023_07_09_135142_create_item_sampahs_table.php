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
        Schema::create('item_sampahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_jenis');
            $table->integer('jumlah');
            $table->float('hargasatuan');
            $table->text('deskripsi')->nullable();
            //FK
            $table->foreignUuid('sampah_id')->references('id')->on('sampahs');
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
        Schema::dropIfExists('item_sampahs');
    }
};
