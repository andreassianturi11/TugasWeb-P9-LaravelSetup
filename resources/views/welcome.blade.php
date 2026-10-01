@extends('layouts.app')

@section('title', 'Home - Laravel P9')

@section('content')
    <div class="card">
        <p class="muted">Tugas Rutin 9 — Setup Laravel</p>
        <h1>Halo, {{ $name }}!</h1>
        <p>Laravel berhasil dijalankan. Halaman ini menerima data dinamis dari proses route ke controller lalu ditampilkan menggunakan Blade.</p>
    </div>

    <div class="card">
        <h2>Mata Kuliah yang Sedang Dipelajari</h2>
        <ul class="list">
            @foreach ($courses as $course)
                <li>{{ $course }}</li>
            @endforeach
        </ul>
    </div>
@endsection
