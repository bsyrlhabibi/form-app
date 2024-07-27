<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Asesmen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Daftar Asesmen</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Elemen 1 K</th>
                <th>Elemen 1 BK</th>
                <th>Elemen 1 Bukti</th>
                <th>Elemen 2 K</th>
                <th>Elemen 2 BK</th>
                <th>Elemen 2 Bukti</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asesmens as $index => $asesmen)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $asesmen->elemen1_k ? 'Yes' : 'No' }}</td>
                    <td>{{ $asesmen->elemen1_bk ? 'Yes' : 'No' }}</td>
                    <td>
                        @if($asesmen->elemen1_bukti1) Bukti 1 @endif
                        @if($asesmen->elemen1_bukti2) Bukti 2 @endif
                        @if($asesmen->elemen1_bukti3) Bukti 3 @endif
                        @if($asesmen->elemen1_bukti4) Bukti 4 @endif
                    </td>
                    <td>{{ $asesmen->elemen2_k ? 'Yes' : 'No' }}</td>
                    <td>{{ $asesmen->elemen2_bk ? 'Yes' : 'No' }}</td>
                    <td>
                        @if($asesmen->elemen2_bukti1) Bukti 1 @endif
                        @if($asesmen->elemen2_bukti2) Bukti 2 @endif
                        @if($asesmen->elemen2_bukti3) Bukti 3 @endif
                        @if($asesmen->elemen2_bukti4) Bukti 4 @endif
                    </td>
                    <td>
                        <a href="{{ route('asesmen.export', $asesmen->id) }}" class="btn btn-primary">Export PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
