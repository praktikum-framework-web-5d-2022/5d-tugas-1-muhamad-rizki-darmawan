<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $mhs = [
    'Yari Sumiari',
    'Sari Puspita',
    'Ahlulica Saumi',
    'Rizki Hidayat',
    'Tafiqurahman',
    'Jonatan Hutapea',
    'Stepen Chen',
    'Martius Colius',
    'Jajang Sudrajat',
    'Sujono Markono',
    ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});

Route::get('/dosen', function () {
    $dosen = [
    'Ahmad Soubarjo M.Kom',
    'Yayan Ruhyan M.Pd',
    'John Wick M.Pd',
    'Maman Uzumaki M.Kom',
    'Alexander Graham M.Ag',
    'Peter Quil M.Kom',
    'Steve Hidayat M.Kom',
    'Puni Sukiani M.Pd',
    'Lala Koalala M.Kom',
    'Lulu Kolulu M.Pd',
    ];
    return view('dosen')->with('dosen',$dosen);
});

Route::get('/matkul', function () {
    $matkul = [
    'Matematika Diskrit',
    'Pendidikan Pancasila',
    'Sejarah Indonesia',
    'Pemrograman Berbasis Mobile',
    'Pendidikan Akhlak',
    'Jaringan Komputer',
    'Rekayasa Perangkat Lunak',
    'Bahasa Inggris',
    'Algoritma Pemrograman',
    'Bahasa Indonesia',
    ];
    return view('matkul')->with('matkul',$matkul);
});

