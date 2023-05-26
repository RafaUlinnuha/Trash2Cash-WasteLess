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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->float('total') -> nullable();
            $table->dateTime('batas_pembayaran') ->nullable();
            $table->enum('status',['menunggu','batal', 'selesai']);
            $table->string('bukti_pembayaran')->nullable();

            //FK
            $table->foreignUuid('order_id')->references('id')->on('orders');
            
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
        Schema::dropIfExists('pembayarans');
    }
};
