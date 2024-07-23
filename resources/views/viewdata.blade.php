@extends('layout.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Data Bagian Satu</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $bagiansatu)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $bagiansatu->nama_lengkap }}</td>
                <td><button class="export-btn" data-id="{{ $bagiansatu->id }}">Export</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.export-btn');
        
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const url = `{{ route('viewdata.exportPdf', '') }}/${id}`;
                window.location.href = url;
            });
        });
    });
</script>
@endsection
