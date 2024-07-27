<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesmen Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
        .checkbox {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 1px solid #ced4da;
            background-color: #fff;
            vertical-align: middle;
            position: relative;
        }
        .checkbox.checked {
            background-color: #007bff;
        }
        .checkbox.checked::after {
            content: '✔';
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Data Asesmen</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Dapatkah Saya</th>
                <th>K</th>
                <th>BK</th>
                <th>Bukti</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asesmens as $index => $asesmen)
                <tr>
                    <td>{{ $asesmen->dapatkah_saya }}</td>
                    <td class="text-center">
                        <div class="checkbox {{ $asesmen->elemen1_k ? 'checked' : '' }}"></div>
                    </td>
                    <td class="text-center">
                        <div class="checkbox {{ $asesmen->elemen1_bk ? 'checked' : '' }}"></div>
                    </td>
                    <td>
                        @if($asesmen->elemen1_bukti1) <div class="checkbox checked"></div> Bukti 1 @endif
                        @if($asesmen->elemen1_bukti2) <div class="checkbox checked"></div> Bukti 2 @endif
                        @if($asesmen->elemen1_bukti3) <div class="checkbox checked"></div> Bukti 3 @endif
                        @if($asesmen->elemen1_bukti4) <div class="checkbox checked"></div> Bukti 4 @endif
                    </td>
                    <td class="text-center">
                        <div class="checkbox {{ $asesmen->elemen2_k ? 'checked' : '' }}"></div>
                    </td>
                    <td class="text-center">
                        <div class="checkbox {{ $asesmen->elemen2_bk ? 'checked' : '' }}"></div>
                    </td>
                    <td>
                        @if($asesmen->elemen2_bukti1) <div class="checkbox checked"></div> Bukti 1 @endif
                        @if($asesmen->elemen2_bukti2) <div class="checkbox checked"></div> Bukti 2 @endif
                        @if($asesmen->elemen2_bukti3) <div class="checkbox checked"></div> Bukti 3 @endif
                        @if($asesmen->elemen2_bukti4) <div class="checkbox checked"></div> Bukti 4 @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
