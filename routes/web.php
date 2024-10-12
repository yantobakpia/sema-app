<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
    
    //Route::get(''[controller::class,'nama'])->name(directory.namadepans setelah blade);
    //1. Route::get('[route]')
//Ini mendefinisikan rute HTTP GET. Saat ada permintaan GET ke URL tertentu, Laravel akan menjalankan logika yang terkait dengan rute tersebut.
//'[route]' adalah URL yang dimasukkan di sini. Misalnya, jika Anda menulis 'home', maka URL-nya akan menjadi http://your-app-url/home.
//2. [Controller::class, 'index']
//Bagian ini mendefinisikan kontroler dan metode yang akan dipanggil saat rute ini diakses.
//Controller::class adalah representasi dinamis dari nama kelas kontroler. Dalam konteks Laravel, ini adalah cara untuk mereferensikan sebuah kontroler.
//'index' adalah metode yang ada di dalam kontroler tersebut yang akan dipanggil. Metode ini biasanya digunakan untuk menampilkan halaman atau data.
//3. ->name('directory.namadepans_setelah_blade')
//name memberikan nama unik pada rute. Nama ini berguna saat Anda ingin mengacu pada rute ini di bagian lain aplikasi, seperti saat membuat tautan.
//'directory.namadepans_setelah_blade' adalah string yang merepresentasikan nama rute. Anda dapat memberi nama rute dengan pola yang spesifik untuk memudahkan referensi. Misalnya, directory mungkin mengacu pada modul atau bagian aplikasi, dan namadepans_setelah_blade bisa menjadi bagian yang lebih spesifik dari penamaan.
  //cara pemanggilan
  //<a href="{{ route('frontend.home') }}">Home</a>
  
});
