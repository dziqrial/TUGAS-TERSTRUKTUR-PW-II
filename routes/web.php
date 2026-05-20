<?php

use App\Http\Controllers\DesignController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/simpan.mahasiswa', function () {
    $npm = request('npm');
    $nama = request('nama');
    return 'NPM: '.$npm. ' Nama: '.$nama;
})->name('mahasiswa.simpan');


Route::get('/sintaks', function () {
    $nama = 'Dziqri Alghifar';
    $alamat = '<b>Cianjur</b>';
    //via array
    // return view('sintaks',['nama'=>$nama,
    //                       'alamat'=>$alamat]);

    //via compact()
    // return view('sintaks',compact('nama','alamat'));

    //compact variable
    $idUser = 1001;
    $nilai = 65;
    $buah = array('apel','jeruk','mangga');
    $data = compact('nama','alamat','nilai','buah');
    return view('sintaks',$data)->with('id', $idUser);
    
    //
});


Route::get('/', [DesignController::class, 'index'])->name('home');
Route::get('/about', [DesignController::class, 'about'])->name('about');
Route::get('/gallery', [DesignController::class, 'gallery'])->name('gallery');
Route::get('/contact', [DesignController::class, 'contact'])->name('contact');
Route::get('/siak', [DesignController::class, 'siak'])->name('siak');


//SIAK
//Mahasiswa
Route::get('/mahasiswa/list', [MahasiswaController::class, 'index'])->name('mhs.list');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mhs.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mhs.store');
Route::get('/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit'])->name('mhs.edit');
Route::put('/mahasiswa/{npm}/update', [MahasiswaController::class, 'update'])->name('mhs.update');
//Dosen
Route::get('/dosen/list', [DosenController::class, 'index'])->name('dsn.list');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dsn.create');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dsn.store');
Route::get('/dosen/{nidn}/edit', [DosenController::class, 'edit'])->name('dsn.edit');
Route::put('/dosen/{nidn}/update', [DosenController::class, 'update'])->name('dsn.update');
