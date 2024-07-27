@extends('layout.master')

@section('content')

<head>
    <title>Form Sertifikasi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h2 class="mb-4">Bagian 2: Data Sertifikasi</h2>
        
        <form method="POST" action="{{ route('certification-form.store') }}">
            @csrf

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul') }}" required>
            </div>

            <div class="form-group">
                <label for="nomor">Nomor:</label>
                <input type="text" id="nomor" name="nomor" class="form-control" value="{{ old('nomor') }}" required>
            </div>

            <div class="form-group">
                <label>Tujuan Assesmen:</label><br>
                <div class="form-check">
                    <input type="checkbox" name="tujuan[]" value="sertifikasi" class="form-check-input" {{ in_array('sertifikasi', old('tujuan', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">Sertifikasi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="tujuan[]" value="pkt" class="form-check-input" {{ in_array('pkt', old('tujuan', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">Pengakuan Kompetensi Terkini (PKT)</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="tujuan[]" value="rpl" class="form-check-input" {{ in_array('rpl', old('tujuan', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">Rekognisi Pembelajaran Lampau (RPL)</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="tujuan[]" value="lainnya" class="form-check-input" {{ in_array('lainnya', old('tujuan', [])) ? 'checked' : '' }}>
                    <label class="form-check-label">Lainnya</label>
                </div>
            </div>

    <div class="form-group">
    <h3>Unit Kompetensi</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Unit</th>
                <th>Judul Unit</th>
                <th>Standar Kompetensi</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i < 3; $i++)
            <tr>
                <td><input type="text" name="kode_unit[]" class="form-control"></td>
                <td><input type="text" name="judul_unit[]" class="form-control"></td>
                <td><input type="text" name="standar_kompetensi[]" class="form-control"></td>
            </tr>
            @endfor
            </tbody>
            </table>
        </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

@endsection
