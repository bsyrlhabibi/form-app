<!DOCTYPE html>
<html>
<head>
    <title>Form Sertifikasi dan Data</title>
    <style>
        /* Umum */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        .form-check-input {
            margin-right: 10px;
        }

        /* Bagian 1 */
        .bagian1 .row {
            margin-bottom: 20px;
            display: table;
            width: 100%;
        }
        .bagian1 .label {
            display: table-cell;
            width: 200px;
            padding-right: 10px;
            vertical-align: top;
        }
        .bagian1 .label2 {
            display: table-cell;
            text-align: left;
            padding-right: 5px;
            border-bottom: 1px solid #000;
            width: 20px;
        }
        .bagian1 .value {
            display: table-cell;
            border-bottom: 1px solid #000;
            padding-bottom: 2px;
            vertical-align: bottom;
            width: calc(100% - 200px - 10px);
        }
        .bagian1 .sub-table {
            width: 100%;
            border-collapse: collapse;
        }
        .bagian1 .sub-table td {
            padding: 5px;
            border-bottom: 1px solid #000;
        }

        /* Bagian 2 */
        .bagian2 table {
            width: 100%;
            border-collapse: collapse;
        }
        .bagian2 table, .bagian2 th, .bagian2 td {
            border: 1px solid black;
        }
        .bagian2 th, .bagian2 td {
            padding: 8px;
            text-align: left;
        }
        .bagian2 h1, .bagian2 h2, .bagian2 h3 {
            text-align: left;
        }

        /* Page Break */
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Bagian 1 -->
    <div class="bagian1">
        <p><strong>FR.APL.01. PERMOHONANAN SERTIFIKASI KOMPETENSI</strong></p>
        <p></p>
        <p><strong>Bagian 1 : Rincian Data Permohonan Sertifikasi </strong></p>
        <p>Pada bagian ini, cantumkan data pribadi, data pendidikan forma serta data pekerjaan anda pada saat ini.</p>
        <p><strong>a. Data Pribadi</strong></p>
        <div class="row">
            <span class="label">Nama lengkap</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->nama_lengkap }}</span>
        </div>
        <div class="row">
            <span class="label">No. KTP/NIK/Paspor</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->no_ktp }}</span>
        </div>
        <div class="row">
            <span class="label">Tempat / tgl. Lahir</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->tempat_tanggal_lahir }}</span>
        </div>
        <div class="row">
            <span class="label">Jenis kelamin</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->jenis_kelamin }}</span>
        </div>
        <div class="row">
            <span class="label">Kebangsaan</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->kebangsaan }}</span>
        </div>
        <div class="row">
            <span class="label">Alamat rumah</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="value inline">{{ $bagiansatuData->alamat_rumah }}</td>
                    <td class="label inline" style="width: auto;">Kode pos:</td>
                    <td class="value inline">{{ $bagiansatuData->kode_pos }}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <span class="label">No. Telepon/HP</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="label inline" style="width: auto;">Rumah:</td>
                    <td class="value inline">{{ $bagiansatuData->no_rumah }}</td>
                    <td class="label inline" style="width: auto;">HP:</td>
                    <td class="value inline">{{ $bagiansatuData->no_hp }}</td>
                </tr>
                <tr>
                    <td class="label inline" style="width: auto;">Kantor:</td>
                    <td class="value inline">{{ $bagiansatuData->no_kantor }}</td>
                    <td class="label inline" style="width: auto;">Email:</td>
                    <td class="value inline">{{ $bagiansatuData->email }}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <span class="label">Kualifikasi Pendidikan *Coret yang tidak perlu</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->kualifikasi_pendidikan }}</span>
        </div>
        <p><strong>b. Data Pekerjaan Sekarang</strong></p>
        <div class="row">
            <span class="label">Nama Institusi/Perusahaan</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->nama_institusi }}</span>
        </div>
        <div class="row">
            <span class="label">Jabatan</span>
            <span class="label2">:</span>
            <span class="value">{{ $bagiansatuData->jabatan }}</span>
        </div>
        <div class="row">
            <span class="label">Alamat Kantor</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="value inline">{{ $bagiansatuData->alamat_kantor }}</td>
                    <td class="label inline" style="width: auto;">Kode pos:</td>
                    <td class="value inline">{{ $bagiansatuData->kode_pos_kantor }}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <span class="label">No. Telp/Fax/E-mail</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="label inline" style="width: auto;">Telp:</td>
                    <td class="value inline">{{ $bagiansatuData->no_telp }}</td>
                    <td class="label inline" style="width: auto;">Fax:</td>
                    <td class="value inline">{{ $bagiansatuData->fax }}</td>
                </tr>
                <tr>
                    <td class="label inline" style="width: auto;">Email:</td>
                    <td class="value inline">{{ $bagiansatuData->email_kantor }}</td>
                    <td class="label inline" style="width: auto;"></td>
                    <td class="value inline"></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Page Break -->
    <div class="page-break"></div>
    <!-- Bagian 2 -->
    <div class="bagian2">
        <p><strong>Bagian 2: Data Sertifikasi</strong></p>
        <p>Tuliskan Judul dan Nomor Skema Sertifikasi yang anda ajukan berikut Daftar Unit Kompetensi sesuai kemasan pada skema
            sertifikasi untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, serta pengalaman kerja yang anda miliki.</p>

        <table>
            <tr>
                <th>Skema Sertifikasi (KKNI/Okupasi/Klaster)</th>
                <th>Judul</th>
                <td>{{ $certificationData->judul }}</td>
            </tr>
            <tr>
                <th></th>
                <th>Nomor</th>
                <td>{{ $certificationData->nomor }}</td>
            </tr>
            <tr>
                <th>Tujuan Asesmen</th>
                <td colspan="2">
                    <input class="form-check-input" type="checkbox" {{ strpos($certificationData->tujuan_asesmen, 'Sertifikasi') !== false ? 'checked' : '' }}> Sertifikasi<br>
                    <input class="form-check-input" type="checkbox" {{ strpos($certificationData->tujuan_asesmen, 'PKT') !== false ? 'checked' : '' }}> Pengakuan Kompetensi Terkini (PKT)<br>
                    <input class="form-check-input" type="checkbox" {{ strpos($certificationData->tujuan_asesmen, 'RPL') !== false ? 'checked' : '' }}> Rekognisi Pembelajaran Lampau (RPL)<br>
                    <input class="form-check-input" type="checkbox" {{ strpos($certificationData->tujuan_asesmen, 'Lainnya') !== false ? 'checked' : '' }}> Lainnya
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
        @foreach ($certificationData->competenceUnits as $index => $unit)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $unit->kode_unit }}</td>
            <td>{{ $unit->judul_unit }}</td>
            <td>{{ $unit->standar_kompetensi_kerja }}</td>
        </tr>
        @endforeach
        
        @for ($i = count($certificationData->competenceUnits); $i < 3; $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endfor
    </tbody>
</table>

<!-- Bukti Persyaratan Dasar -->
<div class="bukti-pdd">
    <p><strong>Bagian 3: Bukti Persyaratan Dasar</strong></p>
    <p>Berikut adalah bukti persyaratan dasar yang harus dipenuhi:</p>
    <table>
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Bukti Persyaratan Dasar</th>
                <th colspan="2">Ada</th>
                <th rowspan="2">Tidak Ada</th>
            </tr>
            <tr>
                <th>Memenuhi Syarat</th>
                <th>Tidak Memenuhi Syarat</th>
            </tr>
        </thead>
        <tbody>
            @php
                $descriptions = [
                    1 => 'Transkrip Nilai Mahasiswa Universitas PGRI Semarang semester 5 dengan nilai minimal C pada mata kuliah Algoritma dan Dasar Pemrograman dan/atau Struktur Data dan/atau Pemrograman Komputer dan/atau Sistem Basis Data dan/atau Desain Web dan/atau Pemrograman Web dan/atau Rekayasa Perangkat Lunak',
                    2 => 'Sertifikat pelatihan berbasis kompetensi untuk jabatan Junior Web Programmer yang dilakukan oleh Universitas PGRI Semarang'
                ];
            @endphp

            @foreach ($bagiansatuData->buktiPersyaratanDasar as $index => $bukti)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $descriptions[$index + 1] ?? 'Deskripsi tidak tersedia' }}</td>
                <td>
                    <input type="checkbox" disabled {{ $bukti->memenuhi_syarat ? 'checked' : '' }}>
                </td>
                <td>
                    <input type="checkbox" disabled {{ $bukti->tidak_memenuhi_syarat ? 'checked' : '' }}>
                </td>
                <td>
                {{ $bukti->tidakada }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<table>
    <tr>
      <td style="width: 50%;">
        <b>Rekomendasi (diisi oleh LSP):</b><br>
        Berdasarkan ketentuan persyaratan dasar, maka pemohon:<br>
        Diterima/ Tidak diterima *) sebagai peserta sertifikasi<br>
        <i>* coret yang tidak sesuai</i>
      </td>
      <th colspan=2>Pemohon/Kandidat:</th>
    </tr>
    <tr>
      <td rowspan="2"></td>
      <td>Nama</td>
      <td></td>
    </tr>
    <tr>
      <td>Tanda tangan/ Tanggal</td>
      <td></td>
    </tr>
    <tr>
      <td style="width: 50%;">
        <b>Catatan:</b>
      </td>
      <th colspan=2">Admin LSP:</th>
      
    </tr>
    <tr>
      <td rowspan="2"></td>
      <td style="width: 25%;">Nama</td>
      <td></td>
    </tr>
    <tr>
      <td>Tanda tangan/ Tanggal</td>
      <td></td>
    </tr>
  </table>
    </div>
</div>

</body>
</html>
