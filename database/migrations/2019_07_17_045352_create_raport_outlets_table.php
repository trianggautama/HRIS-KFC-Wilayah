<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaportOutletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raport_outlets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('outlet_id');
            $table->integer('brand_standard')->length(11);
            $table->integer('food_safety')->length(11);
            $table->integer('local_standard')->length(11);
            $table->text('keterangan_lokal_standard');
            $table->text('keterangan_brand_standard');
            $table->text('keterangan_food_safety');

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
        Schema::dropIfExists('raport_outlets');
    }
}
