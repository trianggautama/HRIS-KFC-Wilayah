<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaportKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raport_karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('karyawan_id');
            $table->unsignedbigInteger('outlet_id');
            $table->integer('kedisiplinan')->length(11);
            $table->integer('tanggung_jawab')->length(11);
            $table->integer('komunikasi')->length(11);
            $table->integer('pelayanan')->length(11);
            $table->integer('efisiensi')->length(11);
            $table->integer('ketetapan')->length(11);
            $table->integer('pengaturan_waktu')->length(11);
            $table->integer('kepribadian')->length(11);
            $table->integer('prestasi')->length(11);
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');
            $table->foreign('outlet_id')->references('id')->on('outlets')->onDelete('cascade');
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
        Schema::dropIfExists('raport_karyawans');
    }
}
