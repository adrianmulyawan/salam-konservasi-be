<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('conservation_area_id');
            $table->unsignedBigInteger('master_price_id');
            $table->string('name');
            $table->enum('citizen', ['wni', 'wna']);
            $table->string('address');
            $table->string('phone_number');
            $table->string('identity_image');
            $table->string('price');
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->foreign('conservation_area_id')->references('id')->on('conservation_areas');
            $table->foreign('master_price_id')->references('id')->on('master_prices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
