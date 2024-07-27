@extends('layout.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Sertifikasi</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Nomor</th>
                <th>Tujuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certificationForms as $form)
            <tr>
                <td>{{ $form->id }}</td>
                <td>{{ $form->judul }}</td>
                <td>{{ $form->nomor }}</td>
                <td>{{ implode(', ', $form->tujuan) }}</td>
                <td>
                    <button class="export-btn btn btn-primary" data-id="{{ $form->id }}">Export PDF</button>
                </td>
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
                const url = `{{ route('certification-form.exportPdf', ':id') }}`.replace(':id', id);
                window.location.href = url;
            });
        });
    });
</script>
@endsection
