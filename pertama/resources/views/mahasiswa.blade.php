@extends('layouts.app')
@section('title', 'Daftar Mahasiswa')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Daftar Mahasiswa</h1>
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-800 text-white">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">NIM</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr class="border-b">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $mhs['nim'] }}</td>
                        <td class="px-4 py-3">{{ $mhs['nama'] }}</td>
                        <td class="px-4 py-3">{{ $mhs['jurusan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection