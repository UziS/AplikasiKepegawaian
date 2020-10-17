@extends('layouts.apps')
@section('content')

    <!-- Container Fluid-->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Tabel Pegawai</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <!-- DataTable with Hover -->
    <div class="col-lg-12">
    @include('pesan')
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pegawai</h6>
          <a href="{{ route('create.pegawai') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data</span>
          </a>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Tempat, Tanggal lahir</th>
                <th>NIP</th>
                {{-- <th>Golongan</th> --}}
                {{-- <th colspan="3" class="text-center">Realisasi Pangkat</th>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Tmt</th>
                <th>Jabatan</th>
                <th colspan="3">Realisasi Jabatan Terakhir</th>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Tmt</th>
                <th>Pendidikan Tertinggi</th>
                <th>Pendidikan Penjenjangan</th> --}}
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                {{-- <th>Keterangan</th> --}}
                <th colspan="2">Opsi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  $no = 1;
                ?>
                @foreach ($datapegawai as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><a href="{{ route ('show.pegawai',$data->id) }}">{{ $data->namapegawai }}</a></td>
                    <td>{{ $data->tempatlahirpegawai }}, 
                      <?php
                        $date = date('d-F-Y', strtotime($data->tanggallahirpegawai)); 
                      ?>
                        {{ $date }}
                    </td>
                    <td>{{ $data->nip }}</td>
                    {{-- <td>{{ $data->golongan }}</td> --}}
                    {{-- <td>{{ $data->nomor_pangkat }}</td>
                    <td>{{ $data->tanggal_pangkat }}</td>
                    <td>{{ $data->tmt_pangkat }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>{{ $data->nomor_jabatan }}</td>
                    <td>{{ $data->tanggal_jabatan }}</td>
                    <td>{{ $data->tmt_jabatan }}</td>
                    <td>{{ $data->pendidikan_tertinggi }}</td>
                    <td>{{ $data->pendidikan_penjenjangan }}</td> --}}
                    <td>{{ $data->jkpegawai }}</td>
                    <td>{{ $data->agama }}</td>
                    {{-- <td>{{ $data->keterangan }}</td> --}}
                    {{-- <td>
                      <a href="{{ route ('show.pegawai',$data->id) }}" class="btn btn-success">Show</a>
                    </td> --}}
                    <td>
                        <a href="{{ route ('edit.pegawai',$data->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter"
                      id="#modalCenter">Hapus</button>
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Apakah anda yakin akan menghapus data atas nama, {{ $data->namapegawai }} ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tidak</button>
                              <form action="{{ route ('destroy.pegawai', $data->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-primary">Ya</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                        {{-- <form action="{{ route ('destroy.pegawai', $data->id) }}" method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger">Hapus</button>
                        </form> --}}
                    </td>
                  {{-- </form> --}}
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Datatables -->
  </div>
  <!--Row-->
<!---Container Fluid-->
<!-- Modal Center -->
@endsection