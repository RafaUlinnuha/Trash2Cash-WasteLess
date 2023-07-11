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
        Schema::create('sampahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('status',['ongoing', 'selesai']);
            $table->date('tgl_jemput')->nullable();
            $table->string('waktu_jemput')->nullable();
            //FK
            $table->foreignUuid('anggota_user_id')->references('id')->on('users');
            $table->foreignUuid('bank_user_id')->nullable()->references('id')->on('users');
            
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
        Schema::dropIfExists('sampahs');
    }
};
