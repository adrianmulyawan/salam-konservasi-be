<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConservationAreaGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conservation_area_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conservation_area_id');
            $table->string('photo');
            $table->timestamps();

            $table->foreign('conservation_area_id')->references('id')->on('conservation_areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conservation_area_galleries');
    }
}
