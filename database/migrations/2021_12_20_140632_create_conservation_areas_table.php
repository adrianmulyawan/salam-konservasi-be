<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConservationAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conservation_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('master_price_id');
            $table->string('conservation_area_name');
            $table->string('slug');
            $table->string('conservation_area_location');
            $table->text('about_conservation_area');
            $table->boolean('is_open');
            $table->string('conservation_area_map');
            $table->boolean('is_homestay');
            $table->boolean('is_resto');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('conservation_areas');
    }
}
