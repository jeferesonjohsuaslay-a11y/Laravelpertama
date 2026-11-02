@extends('layouts.app')
@section('title', 'Halaman Daftar Student Aktif')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Daftar Students</h1>
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-800 text-white">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">NIM</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Jurusan</th>
                    <th class="px-4 py-3">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $student->nim }}</td>
                        <td class="px-4 py-3">{{ $student->nama }}</td>
                        <td class="px-4 py-3">{{ $student->jurusan }}</td>
                        <td class="px-4 py-3">{{ $student->aktif ? 'Aktif' : 'Tidak Aktif' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection