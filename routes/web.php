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
    return view('welcome');
});

//Buat route ke halaman profil
Route::get("/profil",function(){
    return view ("profile");
});

//Route dengan parameter (wajib)
Route::get("/mahasiswa/{nama}", function($nama = "Rafli"){
    echo "<h1>Halo Nama Saya $nama</h2>";
});

//Route dengan parameter (tidak wajib)
Route::get("/mahasiswa2/{nama?}", function($nama = "Rafli"){
    echo "<h1>Halo Nama Saya $nama</h2>";
});

//Route dengan parameter > 1
Route::get("/profil/{nama?}/{pekerjaan?}", function($nama = "Rafli", $pekerjaan = "Mahasiswa"){
    echo "<h1>Halo Nama Saya $nama. Saya Adalah $pekerjaan</h2>";
});

Route::redirect("/contact", "/hubungi");

Route::get("/halo", function(){
    echo "<a href='".route('call') . "'>"."</a>";
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/dosen/index', function () {
    return view('dosen.index');
});

Route::get('/fakultas', function () {
    return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
});

Route::get('/fakultas', function () {
   // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
   return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);

});

Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
    return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
   //return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas  Ekonomi dan Bisnis"]]);
   return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas  Ekonomi dan Bisnis"]);
 });

 Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
    return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
   //return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas  Ekonomi dan Bisnis"]]);
  // return view('fakultas.index')->with("fakultas", [Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);
  $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas  Ekonomi dan Bisnis"];
  return view('fakultas.index', compact('fakultas'));
 });

 Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
    return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
   //return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
  // return view('fakultas.index')->with("fakultas", [Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);
  // $fakultas = [];
  $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas  Ekonomi dan Bisnis"];

  return view('fakultas.index', compact('fakultas'));
 });

 Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
    return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
   //return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
  // return view('fakultas.index')->with("fakultas", [Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);
  $kampus = "Universitas Multi Data Palembang";
  // $fakultas = [];
  $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"];

  return view('fakultas.index', compact('fakultas', 'kampus'));
 });

