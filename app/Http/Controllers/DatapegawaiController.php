<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Datapegawai;

class DatapegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari table pegawai
        $datapegawai = Datapegawai::all();
        // var_dump($pegawai);
        return view('/datapegawai/datapegawai',['datapegawai' => $datapegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        return view('datapegawai/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'namapegawai'               => 'required',
            'tempatlahirpegawai'        => 'required',
            'tanggallahir'              => 'required',
            'nip'                       => 'required',
            'golongan'                  => 'required',
            'nomor_pangkat'             => 'required',
            'tanggal_pangkat'           => 'required',
            'tmt_pangkat'               => 'required',
            'jabatan'                   => 'required',
            'nomor_jabatan'             => 'required',
            'tanggal_jabatan'           => 'required',
            'tmt_jabatan'               => 'required',
            'pendidikan_tertinggi'      => 'required',
            'pendidikan_penjenjangan'   => 'required',
            'jkpegawai'                 => 'required',
            'agama'                     => 'required',
            'keterangan'                => 'required'

            ]); 

            $tanggallahir = date('Y/m/d', strtotime($request->tanggallahir)); 
            $tanggal_pangkat = date('Y/m/d', strtotime($request->tanggal_pangkat));
            $tanggal_jabatan = date('Y/m/d', strtotime($request->tanggal_jabatan));
            $tmt_pangkat = date('Y/m/d', strtotime($request->tmt_pangkat));
            $tmt_jabatan = date('Y/m/d', strtotime($request->tmt_jabatan));
            $data = new Datapegawai ([ 
                'namapegawai'               => $request->namapegawai,
                'tempatlahirpegawai'        => $request->tempatlahirpegawai,
                'tanggallahirpegawai'       => $tanggallahir,
                'nip'                       => $request->nip,
                'golongan'                  => $request->golongan,
                'nomor_pangkat'             => $request->nomor_pangkat,
                'tanggal_pangkat'           => $tanggal_pangkat,
                'tmt_pangkat'               => $tmt_pangkat,
                'jabatan'                   => $request->jabatan,
                'nomor_jabatan'             => $request->nomor_jabatan,
                'tanggal_jabatan'           => $tanggal_jabatan,
                'tmt_jabatan'               => $tmt_jabatan,
                'pendidikan_tertinggi'      => $request->pendidikan_tertinggi,
                'pendidikan_penjenjangan'   => $request->pendidikan_penjenjangan,
                'jkpegawai'                 => $request->jkpegawai,
                'agama'                     => $request->agama,
                'keterangan'                => $request->keterangan
            ]);
            $data->save();
            return redirect('/datapegawai')->with([
                'success' => 'Data Telah ditambahkan'
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\datapegawai  $datapegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datapegawai = Datapegawai::find($id);
        return view('datapegawai/show', compact('datapegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datapegawai  $datapegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datapegawai = Datapegawai::find($id);
        return view('datapegawai/edit', compact('datapegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datapegawai  $datapegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datapegawai = Datapegawai::find($id);
        $date = date('Y/m/d', strtotime($request->input('tanggallahir')));
        $datapegawai->namapegawai           = $request->input('namapegawai');
        $datapegawai->jkpegawai             = $request->input('jeniskelamin');
        $datapegawai->tempatlahirpegawai    = $request->input('tempatlahirpegawai');
        $datapegawai->tanggallahirpegawai   = $date;
        $datapegawai->nip                   = $request->input('nip');
        $datapegawai->jabatan               = $request->input('jabatan');
        $datapegawai->pendidikan            = $request->input('pendidikan');
        $datapegawai->agama                 = $request->input('agama');
        $datapegawai->save();
        return redirect()->route('datapegawai')->with([
                    'success' => 'Data Telah diubah'
                    ]);
        // echo var_dump($date);
        // $this->validate($request, [
        //     'namapegawai'           => 'required',
        //     'jeniskelamin'          => 'required',
        //     'tempatlahirpegawai'    => 'required',
        //     'tanggallahir'          => 'required',
        //     'nip'                   => 'required|numeric',
        //     'jabatan'               => 'required',
        //     'pendidikan'            => 'required',
        //     'agama'                 => 'required'
        //     ]);
        //     $date = date('Y/m/d', strtotime($request->tanggallahir)); 
        //     $data = Datapegawai::update([ 
        //         'namapegawai'           => $request->namapegawai,
        //         'jkpegawai'             => $request->jeniskelamin,
        //         'tempatlahirpegawai'    => $request->tempatlahirpegawai,
        //         'tanggallahirpegawai'   => $date,
        //         'nip'                   => $request->nip,
        //         'jabatan'               => $request->jabatan,
        //         'pendidikan'            => $request->pendidikan,
        //         'agama'                 => $request->agama
        //     ]);
        //     return redirect()->route('datapegawai')->with([
        //         'success' => 'Data Telah diubah'
        //         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datapegawai  $datapegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datapegawai = Datapegawai::find($id);
        $datapegawai->delete();
        return redirect('datapegawai')->with([
            'error' => 'Data Telah dihapus'
            ]);
    }

    public function pesan()
    {
        return redirect('/datapegawai')->with(['error' => 'Pesan Berhasil']);
    }
}
