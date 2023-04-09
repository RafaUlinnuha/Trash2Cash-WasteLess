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
        Schema::create('alamat_user', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->string('alamat')->nullable();
            $table->string('kecamatan',50)->nullable();
            $table->string('kota',50)->nullable();
            $table->string('provinsi',50)->nullable();
            $table->string('kode_pos',5)->nullable();

            //FK
            $table->string('user_id', 32);
            $table->foreign('user_id')->references('id')->on('user');
            
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
        Schema::dropIfExists('alamat_user');
    }
};
