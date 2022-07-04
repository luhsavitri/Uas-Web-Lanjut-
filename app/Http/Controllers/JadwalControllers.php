<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        $jadwal = Jadwal::latest()->paginate(5);
        return view('jadwal.index', compact('jadwal', 'dosen'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('jadwal.create', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_dosen' => 'required',
            'ruangan' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required'
        ]);
        Jadwal::create($request->all());

        return redirect()->route('jadwal.index')->with('succes', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
        return view('jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        $dosen = Dosen::all();
        return view('jadwal.edit', compact('jadwal'));
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
        $jadwal = Jadwal::find($id);

        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal Dosen Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal Dosen Berhasil di Hapus');
    }
}
