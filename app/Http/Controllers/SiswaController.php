<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Mengajar;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index', [
            'siswa'=>Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_siswa = $request->validate([
            'nis'        => 'required|numeric',
            'nama_siswa' => 'required',
            'jk'         => 'required',
            'alamat'     => 'required',
            'kelas_id'   => 'required',
            'password'   => 'required'
        ]);

        Siswa::create($data_siswa);
        return redirect('/siswa/index')->with('success','Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', [
            'siswa' => $siswa,
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $data_siswa = $request->validate([
            'nis'        => 'required|numeric',
            'nama_siswa' => 'required',
            'jk'         => 'required',
            'alamat'     => 'required',
            'kelas_id'   => 'required',
            'password'   => 'required'
        ]);

        $siswa->update($data_siswa);
        return redirect('/siswa/index')->with('success','Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mengajar = Mengajar::where('guru_id', $guru->id)->first();
        $kelas = Kelas::where('guru_id', $guru->id)->first();

        if($mengajar) {
            return back()->with('error',"$guru->nama_guru masih digunakan pada menu mengajar");
        }

        if($mengajar) {
            return back()->with('error',"$guru->nama_guru masih digunakan pada menu mengajar");
        }

        $siswa->delete();
        return view('siswa.index')->with('success','Data Berhasil Dihapus');
    }
}
