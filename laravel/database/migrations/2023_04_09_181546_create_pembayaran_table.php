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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->float('total');
            $table->dateTime('batas_pembayaran');
            $table->enum('status',['sudah','menunggu']);
            $table->dateTime('waktu_pembayaran')->nullable();

            //FK
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
        Schema::dropIfExists('pembayaran');
    }
};
