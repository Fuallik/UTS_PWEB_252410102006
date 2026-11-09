@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<section id="about">
    <h2>~About~</h2>
    <article>
        <img src="{{ asset('asset/profil.jpg') }}" alt="{{ $biodata['Nama'] }}">
        <ul>
            <li>Login sebagai : {{ $username }}</li>
            @foreach ($biodata as $label => $nilai)
                <li>{{ $label }} : {{ $nilai }}</li>
            @endforeach
        </ul>
    </article>
</section>

<section id="skills">
    <h2>~Skills~</h2>
    <div class="skill-container">
        @foreach ($skills as $skill)
            <article class="skill-item"><h3>{{ $skill }}</h3></article>
        @endforeach
    </div>
</section>

<section id="contact">
    <h2>~Contact~</h2>
    <ul>
        @foreach ($kontak as $k)
            <li><a href="{{ $k['url'] }}">{{ $k['label'] }} : {{ $k['teks'] }}</a></li>
        @endforeach
    </ul>
</section>
@endsection
