<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMhs = Mahasiswa::with('dosen')->get();
        return view('pages.siak_project.mahasiswa.daftar_mahasiswa', compact('dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataDosen = Dosen::all();
        return view('pages.siak_project.mahasiswa.form_mahasiswa', compact('dataDosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'npm' => 'required|min:10|unique:mahasiswa,npm|starts_with:55201',
            'nidn_dosen'=>'required|min:10',
            'nama'=>'required|min:1'
        ]);

        Mahasiswa::create($validate);
        return redirect()->route('mhs.list')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $npm)
    {
        $dataMhs = Mahasiswa::where('npm', $npm)->firstOrFail();
        
        // Ambil semua data dosen untuk dropdown
        $dataDosen = Dosen::all();

        // Kirim ke view
        return view('pages.siak_project.mahasiswa.edit_mahasiswa', compact('dataMhs', 'dataDosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $npm)
    {
        $validate = $request->validate([
            'npm' => 'required|min:10|starts_with:55201|unique:mahasiswa,npm,' . $npm . ',npm',
            'nidn_dosen' => 'required|min:10',
            'nama' => 'required|min:1'
        ]);

        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();

        $mahasiswa->update($validate);

        return redirect()->route('mhs.list')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
