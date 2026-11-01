<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $nama = 'Jefferson Joshua Slay';
        $skills = ['HTML & CSS', 'PHP', 'Laravel'];

        return view('home', [
            'nama' => $nama,
            'skills' => $skills,
        ]);
    }

    public function profile()
    {
        return view('profile');
    }

    public function contact()
    {
        return view('contact');
    }
}