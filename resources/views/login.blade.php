@extends('layouts.app')
@section('title', 'Login')
@section('content')
<section id="login">
    <h2>~Login~</h2>
    <form method="POST" action="{{ route('login.process') }}">
        @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required>
        <small>Username: fauzi</small>
        @error('username') <p class="error">{{ $message }}</p> @enderror
        <button type="submit">Masuk</button>
    </form>
</section>
@endsection
