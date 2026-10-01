@extends('layouts.app')

@section('title', 'Contact - Laravel P9')

@section('content')
    <div class="card">
        <h1>{{ $title }}</h1>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Telepon:</strong> {{ $phone }}</p>
    </div>

    <div class="card">
        <h2>Media Sosial</h2>
        <ul class="list">
            @foreach ($socials as $social)
                <li>{{ $social }}</li>
            @endforeach
        </ul>
    </div>
@endsection
