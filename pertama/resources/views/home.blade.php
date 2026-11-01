@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <section class="text-center py-16">
        <h1 class="text-4xl font-bold mb-4">Halo, saya {{ $nama }}</h1>
        <p class="text-gray-600 mb-6">Mahasiswa yang sedang belajar Laravel.</p>
        <a href="/contact" class="bg-sky-500 text-white px-6 py-2 rounded-lg hover:bg-sky-600">
            Hubungi Saya
        </a>
    </section>

    <section class="grid md:grid-cols-3 gap-6">
        @foreach ($skills as $skill)
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-semibold mb-2">{{ $skill }}</h3>
                <p class="text-gray-600 text-sm">Sedang saya pelajari.</p>
            </div>
        @endforeach
    </section>
@endsection