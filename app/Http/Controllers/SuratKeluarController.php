<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratKeluar;
class SuratKeluarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surats = SuratKeluar::paginate(15);
        return view('surat.index', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surats = new SuratKeluar();
        $surats->no_agenda = $request->no_agenda; 
        $surats->kode = $request->kode;
        $surats->tujuan = $request->tujuan;
        $surats->no_surat = $request->no_surat;
        $surats->tgl_surat = $request->tgl_surat;
        $surats->isi_ringkas = $request->isi_ringkas;
        $surats->keterangan = $request->keterangan;
        $surats->save();
        return redirect()->to('/suratkeluar')->with('alert-success', 'Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cari = $request->get('cari');
        $surats = SuratKeluar::where('kode', 'LIKE', '%' . $cari . '%');
        return view('juki', compact('surats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surats = SuratKeluar::findOrFail($id)->first();
        return view('surat.edit', compact('surats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surats = SuratKeluar::findOrFail($id);
        $surats->delete();
        return redirect()->to('/surat')->with('alert-success', 'Data berhasil di Hapus');
    }
}
