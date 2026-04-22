<?php

use App\Http\Controllers\DesignController;
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