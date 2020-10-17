<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapegawais', function (Blueprint $table) {
            $table->id();
            $table->string('namapegawai');
            $table->string('tempatlahirpegawai');
            $table->date('tanggallahirpegawai');
            $table->integer('nip');
            $table->string('golongan');
            $table->string('nomor_pangkat');
            $table->date('tanggal_pangkat');
            $table->date('tmt_pangkat');
            $table->string('jabatan');
            $table->string('nomor_jabatan');
            $table->date('tanggal_jabatan');
            $table->date('tmt_jabatan');
            $table->string('pendidikan_tertinggi');
            $table->string('pendidikan_penjenjangan');
            $table->string('jkpegawai');
            $table->string('agama');
            $table->string('keterangan');
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
        Schema::dropIfExists('datapegawais');
    }
}
