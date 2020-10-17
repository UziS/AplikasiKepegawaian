@extends('layouts.apps')
@section('content')
<div class="col-lg-6">
    <!-- General Element -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai</h6>
      </div>
      <div class="card-body">
        <form action="{{ route('update.pegawai', $datapegawai->id) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="nip">NIP</label>
            <input type="number" class="form-control" id="nip" name="nip" minlength="10" placeholder="Nomor Induk Pegawai" value="{{ $datapegawai->nip }}" required>
            </div>
            <div class="form-group">
                <label for="namapegawai">Nama Pegawai</label>
                <input type="text" class="form-control" id="namapegawai" name="namapegawai" placeholder="Nama Pegawai" value="{{ $datapegawai->namapegawai }}" required>
            </div>
            <div class="form-group">
                <label for="tempatlahirpegawai">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatlahirpegawai" name="tempatlahirpegawai" placeholder="Tempat Lahir Pegawai" value="{{ $datapegawai->tempatlahirpegawai }}" required>
            </div>
            <div class="form-group" id="simple-date1">
                <label for="simpleDataInput">Tanggal Lahir</label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput" name="tanggallahir">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select class="form-control" id="exampleFormControlSelect1" aria-placeholder="Pilih" name="jeniskelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" value="{{ $datapegawai->pendidikan }}" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan Pegawai</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan Pegawai" value="{{ $datapegawai->jabatan }}" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama Pegawai</label>
                <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama Pegawai" value="{{ $datapegawai->agama }}" required>
            </div>
            <button type="submit">Simpan</button>
        </form>
      </div>
    </div>
  </div>
@endsection