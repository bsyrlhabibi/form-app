<!-- resources/views/certification_pdf.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Data Sertifikasi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-check-input {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Data Sertifikasi</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Skema Sertifikasi (KKNI/Okupasi/Klaster)</th>
                    <th>Judul</th>
                    <th>Nomor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>:</td>
                    <td>{{ $certification->judul }}</td>
                    <td>{{ $certification->nomor }}</td>
                </tr>
                <tr>
                    <td>Tujuan Asesmen</td>
                    <td colspan="2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'Sertifikasi') !== false ? 'checked' : '' }}>
                            <label class="form-check-label">Sertifikasi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'Sertifikasi Ulang') !== false ? 'checked' : '' }}>
                            <label class="form-check-label">Sertifikasi Ulang</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'Pengakuan Kompetensi Terkini (PKT)') !== false ? 'checked' : '' }}>
                            <label class="form-check-label">Pengakuan Kompetensi Terkini (PKT)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'Rekognisi Pembelajaran Lampau') !== false ? 'checked' : '' }}>
                            <label class="form-check-label">Rekognisi Pembelajaran Lampau</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'Lainnya') !== false ? 'checked' : '' }}>
                            <label class="form-check-label">Lainnya</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Sertifikasi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h1, h2, h3 {
            text-align: left;
        }
        .form-check-input {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<p><strong>Bagian 2: Data Sertifikasi</strong></p>

<p>Tuliskan Judul dan Nomor Skema Sertifikasi yang anda ajukan berikut Daftar Unit Kompetensi sesuai kemasan pada skema
    sertifikasi untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, serta pengalaman kerja yang anda miliki.</p>

<table>
    <tr>
        <th>Skema Sertifikasi (KKNI/Okupasi/Klaster)</th>
        <th>Judul</th>
        <td>{{ $certification->judul }}</td>
    </tr>
    <tr>
        <th></th>
        <th>Nomor</th>
        <td>{{ $certification->nomor }}</td>
    </tr>
    <tr>
        <th>Tujuan Asesmen</th>
        <td colspan="2">
            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'Sertifikasi') !== false ? 'checked' : '' }}> Sertifikasi<br>
            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'PKT') !== false ? 'checked' : '' }}> Pengakuan Kompetensi Terkini (PKT)<br>
            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'RPL') !== false ? 'checked' : '' }}> Rekognisi Pembelajaran Lampau (RPL)<br>
            <input class="form-check-input" type="checkbox" {{ strpos($certification->tujuan_asesmen, 'Lainnya') !== false ? 'checked' : '' }}> Lainnya
        </td>
    </tr>
</table>

<p><strong>Daftar Unit Kompetensi sesuai kemasan</strong></p>

</body>
</html>

