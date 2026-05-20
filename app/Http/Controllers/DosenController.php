<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDosen = Dosen::all();
        return view('pages.siak_project.dosen.daftar_dosen', compact('dataDosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.siak_project.dosen.form_dosen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nidn' => 'required|min:10|unique:dosen,nidn',
            'nama'=>'required|min:1'
        ]);

        Dosen::create($validate);
        return redirect()->route('dsn.list')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nidn)
    {
        $dataDosen = Dosen::where('nidn', $nidn)->firstOrFail();

        // Kirim ke view
        return view('pages.siak_project.dosen.edit_dosen', compact('dataDosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nidn)
    {
        $validate = $request->validate(
            [
                'nidn'=>'required|min:10|unique:dosen,nidn,' . $nidn . ',nidn',
                'nama'=>'required|min:5',
            ],

            //custom validasi
            [
                'nidn.required' => 'nidn tidak boleh di kosongkan',
                'nidn.min' => 'nidn terlalu pendek, minimal 10 karakter',
                'nidn.unique' => 'NIDN sudah terdaftar',
                'nama.required' => 'nama tidak boleh di kosongkan',
                'nama.min' => 'nidn terlalu pendek, minimal 5 karakter',
            ]
        );

        Dosen::where('nidn', $nidn)->update($validate);
        return redirect()->route('dsn.list')->with('success','Data dosen berhasil di rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
