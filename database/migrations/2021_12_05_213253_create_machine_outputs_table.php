<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachineOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_outputs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_question');
            $table->unsignedBigInteger('id_answer');
            $table->unsignedBigInteger('id_help');
            $table->unsignedBigInteger('id_result')->nullable();
            $table->unsignedBigInteger('id_next_question')->nullable();
            $table->timestamps();
            $table->foreign('id_question')
                ->references('id')
                ->on('questions');
            $table->foreign('id_answer')
                ->references('id')
                ->on('answers');
            $table->foreign('id_help')
                ->references('id')
                ->on('helps');
            $table->foreign('id_result')
                ->references('id')
                ->on('results');
            $table->foreign('id_next_question')
                ->references('id')
                ->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_outputs');
    }
}
