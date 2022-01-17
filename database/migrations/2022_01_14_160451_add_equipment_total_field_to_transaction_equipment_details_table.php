<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEquipmentTotalFieldToTransactionEquipmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_equipment_details', function (Blueprint $table) {
            $table->integer('equipment_total')->after('equipment_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_equipment_details', function (Blueprint $table) {
            $table->dropColumn('equipment_total');
        });
    }
}
