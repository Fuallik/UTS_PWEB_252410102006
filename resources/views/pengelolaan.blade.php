@extends('layouts.app')
@section('title', 'Pengelolaan')
@section('content')
<section id="pengelolaan">
    <h2>~Pengelolaan Portofolio~</h2>
    <div class="tabel-wrap">
        <table>
            <thead>
                <tr>
                    <th>No</th><th>Gambar</th><th>Judul</th>
                    <th>Teknologi</th><th>Tahun</th><th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset($p['gambar']) }}" alt="{{ $p['judul'] }}" width="80"></td>
                        <td>{{ $p['judul'] }}</td>
                        <td>{{ $p['teknologi'] }}</td>
                        <td>{{ $p['tahun'] }}</td>
                        <td>{{ $p['status'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
