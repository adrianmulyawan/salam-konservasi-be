<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('conservation_area_id');
            $table->string('title');
            $table->string('slug');
            $table->date('event_date');
            $table->string('photo');
            $table->text('event_content');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('events');
    }
}
