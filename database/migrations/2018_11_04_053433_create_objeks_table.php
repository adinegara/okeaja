<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objeks', function (Blueprint $table) {
            $table->increments('id_objek');
            $table->integer('acc_id')->unsigned();
            $table->foreign('acc_id')->references('id_acc')->on('accs');
            $table->string('nama_objek');
            $table->integer('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id_kategori')->on('kategoris');
            $table->integer('wilayah_id')->unsigned();
            $table->foreign('wilayah_id')->references('id_wilayah')->on('wilayahs');
            $table->integer('htm');
            $table->integer('jarakKm');
            $table->time('buka');
            $table->time('tutup');
            $table->string('deskripsi');
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
        Schema::dropIfExists('objeks');
    }
}
