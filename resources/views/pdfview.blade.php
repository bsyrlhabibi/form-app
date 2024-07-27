<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>
    <style>
        /* Tambahkan style untuk tata letak PDF */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        .row {
            margin-bottom: 20px; /* Jarak antar baris */
            display: table;
            width: 100%; /* Memastikan baris mengisi lebar penuh */
        }
        .label {
            display: table-cell;
            width: 200px; /* Lebar label */
            padding-right: 10px; /* Jarak antara label dan tanda titik dua */
            vertical-align: top; /* Menyelaraskan teks di bagian atas */
        }
        .label2 {
            display: table-cell;
            text-align: left; /* Menyelaraskan tanda titik dua ke kanan */
            padding-right: 5px; /* Jarak antara tanda titik dua dan nilai */
            border-bottom: 1px solid #000; /* Garis horizontal di bawah tanda titik dua */
            width: 20px; /* Lebar tanda titik dua */
        }
        .value {
            display: table-cell;
            border-bottom: 1px solid #000; /* Garis horizontal di bawah teks */
            padding-bottom: 2px; /* Jarak di bawah teks untuk garis */
            vertical-align: bottom; /* Menyelaraskan teks di bagian bawah */
            width: calc(100% - 200px - 10px); /* Menyesuaikan lebar untuk sisa ruang */
        }
        .sub-table {
            width: 100%;
            border-collapse: collapse;
        }
        .sub-table td {
            padding: 5px;
            border-bottom: 1px solid #000; /* Garis bawah di setiap sel */
        }
    </style>
</head>
<body>
    <div class="container">
        <p><strong>FR.APL.01. PERMOHONANAN SERTIFIKASI KOMPETENSI</strong></p>
        <p></p>
        <p><strong>Bagian 1 : Rincian Data Permohonan Sertifikasi </strong></p>
        <p>Pada bagian ini, cantumkan data pribadi, data pendidikan forma serta data pekerjaan anda pada saat ini.</p>
        <p><strong>a. Data Pribadi</strong></p>
        <div class="row">
            <span class="label">Nama lengkap</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->nama_lengkap }}</span>
        </div>
        <div class="row">
            <span class="label">No. KTP/NIK/Paspor</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->no_ktp }}</span>
        </div>
        <div class="row">
            <span class="label">Tempat / tgl. Lahir</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->tempat_tanggal_lahir }}</span>
        </div>
        <div class="row">
            <span class="label">Jenis kelamin</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->jenis_kelamin }}</span>
        </div>
        <div class="row">
            <span class="label">Kebangsaan</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->kebangsaan }}</span>
        </div>
        <div class="row">
            <span class="label">Alamat rumah</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="value inline">{{ $data->alamat_rumah }}</td>
                    <td class="label inline" style="width: auto;">Kode pos:</td>
                    <td class="value inline">{{ $data->kode_pos }}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <span class="label">No. Telepon/HP</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="label inline" style="width: auto;">Rumah:</td>
                    <td class="value inline">{{ $data->no_rumah }}</td>
                    <td class="label inline" style="width: auto;">HP:</td>
                    <td class="value inline">{{ $data->no_hp }}</td>
                </tr>
                <tr>
                    <td class="label inline" style="width: auto;">Kantor:</td>
                    <td class="value inline">{{ $data->no_kantor }}</td>
                    <td class="label inline" style="width: auto;">Email:</td>
                    <td class="value inline">{{ $data->email }}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <span class="label">Kualifikasi Pendidikan *Coret yang tidak perlu</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->kualifikasi_pendidikan }}</span>
        </div>
        <p><strong>b. Data Pekerjaan Sekarang</strong></p>
        <div class="row">
            <span class="label">Nama Institusi/Perusahaan</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->nama_institusi }}</span>
        </div>
        <div class="row">
            <span class="label">Jabatan</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->jabatan }}</span>
        </div>
        <div class="row">
            <span class="label">Alamat Kantor</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="value inline">{{ $data->alamat_kantor }}</td>
                    <td class="label inline" style="width: auto;">Kode pos:</td>
                    <td class="value inline">{{ $data->kode_pos_kantor }}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <span class="label">No. Telp/Fax/E-mail</span>
            <span class="label2">:</span>
            <table class="sub-table">
                <tr>
                    <td class="label inline" style="width: auto;">Telp:</td>
                    <td class="value inline">{{ $data->no_telp }}</td>
                    <td class="label inline" style="width: auto;">Fax:</td>
                    <td class="value inline">{{ $data->fax }}</td>
                </tr>
                <tr>
                    <td class="label inline" style="width: auto;">Email:</td>
                    <td class="value inline">{{ $data->email_kantor }}</td>
                    <td class="label inline" style="width: auto;"></td>
                    <td class="value inline"></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
