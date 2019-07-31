<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitstopSaranaDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitstop_sarana_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pitstop_sarana_id')->unsigned();
            $table->string('kode_unit');
            $table->string('hm_km');
            $table->bigInteger('qty_solar')->default(0);
            $table->string('jatah_solar')->default(0);
            $table->time('jam');
            $table->string('nama_user');
            $table->bigInteger('flow_meter_awal')->default(0);
            $table->bigInteger('flow_meter_akhir')->default(0);
            $table->bigInteger('qty_flow_meter')->default(0);
            $table->text('keterangan');
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
        Schema::dropIfExists('pitstop_sarana_detail');
    }
}
