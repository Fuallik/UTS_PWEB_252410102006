@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<section id="dashboard">
    <h2>~Dashboard~</h2>
    <p>Selamat datang, {{ $username }}</p>
    <div class="skill-container">
        <article class="skill-item"><h3>{{ $totalProyek }}</h3><p>Proyek</p></article>
        <article class="skill-item"><h3>{{ $totalSkill }}</h3><p>Skill</p></article>
    </div>
</section>
@endsection
