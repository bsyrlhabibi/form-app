@extends('layout.master')

@section('content')


    <div class="container mt-4">
        <h2 class="mb-4">Formulir Permohonan Sertifikasi Kompetensi</h2>

        <form action="{{ route('bagiansatu.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap:</label>
                <div class="col-sm-10">
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_ktp" class="col-sm-2 col-form-label">No KTP:</label>
                <div class="col-sm-10">
                    <input type="text" id="no_ktp" name="no_ktp" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tempat_tanggal_lahir" class="col-sm-2 col-form-label">Tempat Tanggal Lahir:</label>
                <div class="col-sm-10">
                    <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin:</label>
                <div class="col-sm-10">
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kebangsaan" class="col-sm-2 col-form-label">Kebangsaan:</label>
                <div class="col-sm-10">
                    <input type="text" id="kebangsaan" name="kebangsaan" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat_rumah" class="col-sm-2 col-form-label">Alamat Rumah:</label>
                <div class="col-sm-10">
                    <input type="text" id="alamat_rumah" name="alamat_rumah" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos:</label>
                <div class="col-sm-10">
                    <input type="text" id="kode_pos" name="kode_pos" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_telepon" class="col-sm-2 col-form-label">No Telepon:</label>
                <div class="col-sm-10">
                    <input type="text" id="no_telepon" name="no_telepon" class="form-control" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
@endsection
