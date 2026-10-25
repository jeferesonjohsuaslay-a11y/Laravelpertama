@extends('layouts.app')
@section('title', 'Halaman Kontak')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Kontak Saya</h1>
    <form class="bg-white p-6 rounded-xl shadow space-y-4 max-w-md">
        <input type="text" placeholder="Nama" class="w-full border rounded-lg px-3 py-2">
        <input type="email" placeholder="Email" class="w-full border rounded-lg px-3 py-2">
        <textarea placeholder="Pesan" rows="4" class="w-full border rounded-lg px-3 py-2"></textarea>
        <button type="button" class="bg-sky-500 text-white px-6 py-2 rounded-lg hover:bg-sky-600">
            Kirim
        </button>
    </form>
@endsection