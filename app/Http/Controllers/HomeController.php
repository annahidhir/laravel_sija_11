<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $jumlahKelas=Kelas::count();
        
        $jumlahSiska=Siswa::count();
        return view('home.index',['jumlahKelas','jumlahSiswa']);
    }
}
