<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPurposeIdFieldToMasterPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('master_prices', function (Blueprint $table) {
            $table->foreign('purpose_id')->references('id')->on('purposes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_prices', function (Blueprint $table) {
            $table->dropColumn('purpose_id')->references('id')->on('purposes');
        });
    }
}
