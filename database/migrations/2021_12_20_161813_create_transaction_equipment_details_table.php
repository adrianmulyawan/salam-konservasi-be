<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionEquipmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_equipment_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('add_equipment_id');
            $table->unsignedBigInteger('transaction_id')->constrained('transactions');
            $table->string('equipment_name');
            $table->string('equipment_price');
            $table->timestamps();

            $table->foreign('add_equipment_id')->references('id')->on('add_equipments');
            $table->foreign('transaction_id')->references('id')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_equipment_details');
    }
}
