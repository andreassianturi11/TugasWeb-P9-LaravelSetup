@extends('layouts.app')

@section('title', 'About - Laravel P9')

@section('content')
    <div class="card">
        <h1>{{ $title }}</h1>
        <p>{{ $description }}</p>
    </div>

    <div class="card">
        <h2>Teknologi yang Digunakan</h2>
        @foreach ($stack as $item)
            <span class="badge">{{ $item }}</span>
        @endforeach
    </div>
@endsection
