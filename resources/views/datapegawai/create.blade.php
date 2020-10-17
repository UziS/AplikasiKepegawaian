@extends('layouts.apps')
@section('content')
<div class="col-lg-12">
    <!-- General Element -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai</h6>
      </div>
      <div class="card-body">
        <form action="{{ route('store.pegawai') }}" method="POST">
            {{ csrf_field() }}
            <div class="container">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" id="nip" name="nip" placeholder="Nomor Induk Pegawai" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="namapegawai">Nama</label>
                        <input type="text" class="form-control" id="namapegawai" name="namapegawai" placeholder="Nama Pegawai" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="tempatlahirpegawai">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatlahirpegawai" name="tempatlahirpegawai" placeholder="Tempat Lahir Pegawai" required>
                    </div>
                    <div class="form-group col-6" id="simple-date1">
                        <label for="simpleDataInput">Tanggal Lahir</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput" name="tanggallahir">
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="pendidikan_tertinggi">Pendidikan Tertinggi</label>
                        <input type="text" class="form-control" id="pendidikan_tertinggi" name="pendidikan_tertinggi" placeholder="Pendidikan Tertinggi" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="pendidikan_penjenjangan">Pendidikan Penjenjangan</label>
                        <input type="text" class="form-control" id="pendidikan_penjenjangan" name="pendidikan_penjenjangan" placeholder="Pendidikan Penjenjangan" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="jkpegawai">Jenis Kelamin</label>
                        <select class="form-control" id="jkpegawai" aria-placeholder="Pilih" name="jkpegawai">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="golongan">Golongan</label>
                        <input type="text" class="form-control" id="golongan" name="golongan" placeholder="Golongan" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
                    </div>
                    <div class="form-group col-6">
                        <li>Realisasi pangkat : </li>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="nomor_pangkat">Nomor</label>
                                <input type="number" id="nomor_pangkat" name="nomor_pangkat" class="form-control" required>
                            </div>
                            <div class="form-group col-12" id="simple-date1">
                                <label for="tanggal_pangkat">Tanggal</label>
                                <div class="input-group date">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="01/06/2020" id="tanggal_pangkat" name="tanggal_pangkat">
                                </div>
                            </div>
                            <div class="form-group col-12" id="simple-date1">
                                <label for="tmt_pangkat">Terhitung Mulai Tanggal</label>
                                <div class="input-group date">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="01/06/2020" id="tmt_pangkat" name="tmt_pangkat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <li>Realisasi Jabatan Terakhir : </li>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="nomor_jabatan">Nomor</label>
                                <input type="number" id="nomor_jabatan" name="nomor_jabatan" class="form-control" required>
                            </div>
                            <div class="form-group col-12" id="simple-date1">
                                <label for="tanggal_jabatan">Tanggal</label>
                                <div class="input-group date">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="01/06/2020" id="tanggal_jabatan" name="tanggal_jabatan">
                                </div>
                            </div>
                            <div class="form-group col-12" id="simple-date1">
                                <label for="tmt_jabatan">Terhitung Mulai Tanggal</label>
                                <div class="input-group date">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="01/06/2020" id="tmt_jabatan" name="tmt_jabatan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="keterangan">Keterangan</label><br>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="5" placeholder="Keterangan" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
  </div>
@endsection