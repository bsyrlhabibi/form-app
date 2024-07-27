@extends('layout.master')

@section('content')
<head>
    <title>Show Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Data Bagiansatu</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Export PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bagiansatuData as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td><a href="{{ route('export.pdf', ['id' => $data->id]) }}" class="btn btn-primary">Export PDF</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
