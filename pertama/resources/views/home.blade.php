@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <section class="text-center py-16">
        <h1 class="text-4xl font-bold mb-4">Hai saya Jefferson</h1>
        <p class="text-gray-600 mb-6">Mahasiswa yang sedang belajar Laravel pada Mata Kuliah Pemoraman Web.</p>
        <a href="/contact" class="bg-sky-500 text-white px-6 py-2 rounded-lg hover:bg-sky-600">
            Hubungi Saya
        </a>
    </section>

    <section class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold mb-2">HTML &amp; CSS</h3>
            <p class="text-gray-600 text-sm">Dasar tampilan web.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold mb-2">PHP</h3>
            <p class="text-gray-600 text-sm">Logika di sisi server.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold mb-2">Laravel</h3>
            <p class="text-gray-600 text-sm">Framework untuk membangun aplikasi.</p>
        </div>
    </section>
@endsection