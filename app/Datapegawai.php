<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapegawai extends Model
{
    protected $table = "datapegawais";
    protected $fillable = [
        'id',
        'namapegawai',
        'tempatlahirpegawai',
        'tanggallahirpegawai',
        'nip',
        'golongan',
        'nomor_pangkat',
        'tanggal_pangkat',
        'tmt_pangkat',
        'jabatan',
        'nomor_jabatan',
        'tanggal_jabatan',
        'tmt_jabatan',
        'pendidikan_tertinggi',
        'pendidikan_penjenjangan',
        'jkpegawai',
        'agama',
        'keterangan'
    ];
}
