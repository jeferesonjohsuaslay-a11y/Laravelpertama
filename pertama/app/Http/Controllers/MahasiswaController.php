<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nim' => '250210500037', 'nama' => 'Jefferson Joshua Slay', 'jurusan' => 'Teknik Komputer'],
            ['nim' => '250210500038', 'nama' => 'Dirgy Alfarezi', 'jurusan' => 'Teknik Komputer'],
            ['nim' => '250210500039', 'nama' => 'Ahmad Ahsan', 'jurusan' => 'Teknik Komputer'],
            ['nim' => '250210500040', 'nama' => 'Muh. Ikhsan', 'jurusan' => 'Teknik Komputer'],
        ];

        return view('mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
    public function daftar()
    {
        $students = Student::all();
        return view('daftarstudents', ['students' => $students]);
    }
}