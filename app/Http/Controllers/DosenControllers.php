<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dosen = Dosen::latest()->paginate(5);
        return view('dosen.index', compact('dosen'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dosen.create');
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
            'nama' => 'required',
            'no_hp' => 'required',
            'nip' => 'required',
            'mata_kuliah' => 'required',
            'program_studi' => 'required',
            'fakultas' => 'required'
        ]);
        Dosen::create($request->all());

        return redirect()->route('dosen.index')->with('succes', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        //
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'nip' => 'required',
            'mata_kuliah' => 'required',
            'program_studi' => 'required',
            'fakultas' => 'required'
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        //
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil di Hapus');
    }
}
