<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Sertifikasi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Daftar Sertifikasi</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Nomor</th>
                    <th>Tujuan Asesmen</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($certifications as $certification)
                    <tr>
                        <td>{{ $certification->id }}</td>
                        <td>{{ $certification->judul }}</td>
                        <td>{{ $certification->nomor }}</td>
                        <td>{{ $certification->tujuan_asesmen }}</td>
                        <td>
                            <a href="{{ route('certifications.exportPdf', $certification->id) }}" class="btn btn-primary">Export PDF</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
