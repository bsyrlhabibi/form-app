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
    </style>
</head>
<body>

<p><strong>Bagian 2: Data Sertifikasi</strong></p>

<p>Tuliskan Judul dan Nomor Skema Sertifikasi yang anda ajukan berikut Daftar Unit Kompetensi sesuai kemasan pada skema
    sertifikasi untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, serta pengalaman kerja yang anda miliki.</p>
</p>
<table>
    <tr>
        <th>Skema Sertifikasi (KKNI/Okupasi/Klaster)</th>
        <th>Judul</th>
        <td>{{ $certificationForm->judul }}</td>
    </tr>
    <tr>
        <th></th>
        <th>Nomor</th>
        <td>{{ $certificationForm->nomor }}</td>
    </tr>
    <tr>
        <th>Tujuan Asesmen</th>
        <td colspan="2">
            <input type="checkbox" {{ in_array('Sertifikasi', $certificationForm->tujuan) ? 'checked' : '' }}> Sertifikasi<br>
            <input type="checkbox" {{ in_array('PKT', $certificationForm->tujuan) ? 'checked' : '' }}> Pengakuan Kompetensi Terkini (PKT)<br>
            <input type="checkbox" {{ in_array('RPL', $certificationForm->tujuan) ? 'checked' : '' }}> Rekognisi Pembelajaran Lampau (RPL)<br>
            <input type="checkbox" {{ in_array('Lainnya', $certificationForm->tujuan) ? 'checked' : '' }}> Lainnya
        </td>
    </tr>
</table>

<p><strong>Daftar Unit Kompetensi sesuai kemasan</strong></p>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Unit</th>
            <th>Judul Unit</th>
            <th>Standar Kompetensi Kerja</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($certificationForm->competenceUnits as $index => $unit)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $unit->kode_unit }}</td>
            <td>{{ $unit->judul_unit }}</td>
            <td>{{ $unit->standar_kompetensi }}</td>
        </tr>
        @endforeach
        
        @for ($i = count($certificationForm->competenceUnits); $i < 3; $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endfor
    </tbody>
</table>


</body>
</html>
