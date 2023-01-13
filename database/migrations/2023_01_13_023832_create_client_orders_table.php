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
        Schema::create('client_orders', function (Blueprint $table) {
            $table->id();
            $table->string('client_email')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_contact')->nullable();
            $table->unsignedBigInteger('client_order_number')->nullable();
            $table->string('channel')->nullable();
            $table->string('client_imei')->nullable();
            $table->string('qr_image')->nullable();
            $table->string('template')->nullable();
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
        Schema::dropIfExists('client_orders');
    }
};
