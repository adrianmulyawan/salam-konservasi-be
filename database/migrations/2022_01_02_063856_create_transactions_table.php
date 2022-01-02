<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purpose_id');
            $table->unsignedBigInteger('conservation_area_id');
            $table->unsignedBigInteger('user_id');
            $table->string('transaction_code');
            $table->string('name_of_purpose'); // Tujuan Masuk Kawasan
            $table->date('date_of_entry');
            $table->date('out_date');
            $table->integer('total_transaction');
            $table->enum('submission_status', ['PENDING', 'ALLOWED', 'REJECTED', 'FAILED'])->default('PENDING');
            $table->text('rejected_reason');
            $table->enum('payment_status', ['UNPAID', 'PENDING', 'PAIDOFF', 'FAILED'])->default('UNPAID');
            $table->string('evidence_of_transfer');
            $table->string('account_owner');
            $table->string('entrance_ticket');
            $table->string('educational_research_activity_form');
            $table->timestamps();

            $table->foreign('purpose_id')->references('id')->on('purposes');
            $table->foreign('conservation_area_id')->references('id')->on('conservation_areas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
