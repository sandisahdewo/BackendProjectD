<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitstopSaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitstop_sarana', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nomor');
            $table->string('line')->comment('Line 1, Line 2');
            $table->string('driver')->nullable();
            $table->bigInteger('fuelman')->unsigned();
            $table->date('tanggal');
            $table->string('shift');
            $table->string('whs_number');
            $table->string('lokasi');
            $table->integer('petugas_pitstop');
            $table->string('status')->default('input')->comment('input, finish-input, rejected, approved');
            $table->bigInteger('approved_by')->unsigned();
            $table->dateTime('approved_at');
            $table->bigInteger('created_by')->unsigned();
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
        Schema::dropIfExists('pitstop_sarana');
    }
}
