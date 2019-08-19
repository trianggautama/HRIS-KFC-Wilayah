<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('outlet_id');
            $table->unsignedbigInteger('jabatan_id');
            $table->string('kode_karyawan')->length(20);
            $table->string('tanggal_masuk')->length(20);
            $table->string('nama')->length(191);
            $table->string('jenis_kelamin')->length(10);
            $table->string('tanggal_lahir')->length(10);
            $table->string('telepon')->length(13);
            $table->string('foto')->length(191);
            $table->integer('status_pkwt')->length(4);
            $table->integer('status_kawin')->length(4);
            $table->string('bpjs_kerja')->length(20)->nullable();
            $table->string('bpjs_kesehatan')->length(20)->nullable();
            $table->foreign('outlet_id')->references('id')->on('outlets')->onDelete('cascade');
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
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
        Schema::dropIfExists('karyawans');
    }
}
