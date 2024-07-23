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
            font-weight: bold;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Bagian Satu</h1>
        <div class="row">
            <span class="label">Nama Lengkap</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->nama_lengkap }}</span>
        </div>
        <div class="row">
            <span class="label">No. KTP</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->no_ktp }}</span>
        </div>
        <div class="row">
            <span class="label">Tempat/Tanggal Lahir</span>
            <span class="label2">:</span>
            <span class="value">{{ $data->tempat_tanggal_lahir }}</span>
        </div>
    </div>
</body>
</html>
