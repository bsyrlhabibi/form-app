@extends('layout.master')

@section('content')
<head>
    <title>Form Input Sertifikasi</title>
</head>
<body>
    <h1>Form Input Sertifikasi</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('certifications.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}">
        @error('judul')<div>{{ $message }}</div>@enderror

        <label for="nomor">Nomor:</label>
        <input type="text" id="nomor" name="nomor" value="{{ old('nomor') }}">
        @error('nomor')<div>{{ $message }}</div>@enderror

        <label for="tujuan_asesmen">Tujuan Asesmen:</label>
        <div>
            <input type="checkbox" id="sertifikasi" name="tujuan_asesmen[]" value="Sertifikasi">
            <label for="sertifikasi">Sertifikasi</label><br>

            <input type="checkbox" id="sertifikasi_ulang" name="tujuan_asesmen[]" value="Sertifikasi Ulang">
            <label for="sertifikasi_ulang">Sertifikasi Ulang</label><br>

            <input type="checkbox" id="pkt" name="tujuan_asesmen[]" value="Pengakuan Kompetensi Terkini (PKT)">
            <label for="pkt">Pengakuan Kompetensi Terkini (PKT)</label><br>

            <input type="checkbox" id="rpl" name="tujuan_asesmen[]" value="Rekognisi Pembelajaran Lampau">
            <label for="rpl">Rekognisi Pembelajaran Lampau</label><br>

            <input type="checkbox" id="lainnya" name="tujuan_asesmen[]" value="Lainnya">
            <label for="lainnya">Lainnya</label>
        </div>
        @error('tujuan_asesmen')<div>{{ $message }}</div>@enderror

        <button type="submit">Simpan</button>
    </form>
</body>
@endsection
