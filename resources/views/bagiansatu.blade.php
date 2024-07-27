@extends('layout.master')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Formulir Permohonan Sertifikasi Kompetensi</h2>
        <form action="{{ route('bagiansatu.store') }}" method="POST">
            @csrf
            <p class="mb-4 font-weight-bold">a. Data Pribadi</p>
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
                <label for="no_telepon" class="col-sm-2 col-form-label">No. Telepon/Email:</label>
                <div class="col-sm-10">
                    <div class="row">
                        <label for="no_rumah" class="col-sm-1 col-form-label">Rumah:</label>
                        <div class="col-sm-3">
                            <input type="text" id="no_rumah" name="no_rumah" class="form-control" required>
                        </div>
                        <label for="no_hp" class="col-sm-1 col-form-label">HP:</label>
                        <div class="col-sm-3">
                            <input type="text" id="no_hp" name="no_hp" class="form-control" required>
                        </div>
                        <label for="no_kantor" class="col-sm-1 col-form-label">Kantor:</label>
                        <div class="col-sm-3">
                            <input type="text" id="no_kantor" name="no_kantor" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="email" class="col-sm-1 col-form-label">E-mail:</label>
                        <div class="col-sm-11">
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kualifikasi_pendidikan" class="col-sm-2 col-form-label">Kualifikasi Pendidikan:</label>
                <div class="col-sm-10">
                    <input type="text" id="kualifikasi_pendidikan" name="kualifikasi_pendidikan" class="form-control" required>
                </div>
            </div>

            <p class="mb-4 font-weight-bold">b. Data Pekerjaan Sekarang</p>
            <div class="row mb-3">
                <label for="nama_institusi" class="col-sm-2 col-form-label">Nama Institusi / Perusahaan:</label>
                <div class="col-sm-10">
                    <input type="text" id="nama_institusi" name="nama_institusi" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan:</label>
                <div class="col-sm-10">
                    <input type="text" id="jabatan" name="jabatan" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat_kantor" class="col-sm-2 col-form-label">Alamat Kantor:</label>
                <div class="col-sm-7">
                    <input type="text" id="alamat_kantor" name="alamat_kantor" class="form-control" required>
                </div>
                <label for="kode_pos_kantor" class="col-sm-1 col-form-label">Kode Pos:</label>
                <div class="col-sm-2">
                    <input type="text" id="kode_pos_kantor" name="kode_pos_kantor" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_telp_kantor" class="col-sm-2 col-form-label">No. Telp/Fax/Email:</label>
                <div class="col-sm-10">
                    <div class="row">
                        <label for="no_telp" class="col-sm-1 col-form-label">Telp:</label>
                        <div class="col-sm-3">
                            <input type="text" id="no_telp" name="no_telp" class="form-control" required>
                        </div>
                        <label for="fax" class="col-sm-1 col-form-label">Fax:</label>
                        <div class="col-sm-3">
                            <input type="text" id="fax" name="fax" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="email_kantor" class="col-sm-1 col-form-label">E-mail:</label>
                        <div class="col-sm-11">
                            <input type="email" id="email_kantor" name="email_kantor" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- resources/views/index.blade.php -->
            <p class="mb-4 font-weight-bold">Data Sertifikasi</p>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul:</label>
                <div class="col-sm-10">
                    <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul') }}">
                    @error('judul')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="nomor" class="col-sm-2 col-form-label">Nomor:</label>
                <div class="col-sm-10">
                    <input type="text" id="nomor" name="nomor" class="form-control" value="{{ old('nomor') }}">
                    @error('nomor')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="tujuan_asesmen" class="col-sm-2 col-form-label">Tujuan Asesmen:</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sertifikasi" name="tujuan_asesmen[]" value="Sertifikasi">
                        <label class="form-check-label" for="sertifikasi">Sertifikasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sertifikasi_ulang" name="tujuan_asesmen[]" value="Sertifikasi Ulang">
                        <label class="form-check-label" for="sertifikasi_ulang">Sertifikasi Ulang</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pkt" name="tujuan_asesmen[]" value="Pengakuan Kompetensi Terkini (PKT)">
                        <label class="form-check-label" for="pkt">Pengakuan Kompetensi Terkini (PKT)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rpl" name="tujuan_asesmen[]" value="Rekognisi Pembelajaran Lampau">
                        <label class="form-check-label" for="rpl">Rekognisi Pembelajaran Lampau</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lainnya" name="tujuan_asesmen[]" value="Lainnya">
                        <label class="form-check-label" for="lainnya">Lainnya</label>
                    </div>
                    @error('tujuan_asesmen')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <p class="mb-4 font-weight-bold">c. Data Unit Kompetensi</p>
        <!-- Data Unit Kompetensi Section -->
         
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Unit</th>
                    <th>Judul Unit</th>
                    <th>Kompetensi Kerja</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="unit_kompetensi[0][kode_unit]" class="form-control" required></td>
                    <td><input type="text" name="unit_kompetensi[0][judul_unit]" class="form-control" required></td>
                    <td><input type="text" name="unit_kompetensi[0][kompetensi_kerja]" class="form-control" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="unit_kompetensi[1][kode_unit]" class="form-control" required></td>
                    <td><input type="text" name="unit_kompetensi[1][judul_unit]" class="form-control" required></td>
                    <td><input type="text" name="unit_kompetensi[1][kompetensi_kerja]" class="form-control" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="unit_kompetensi[2][kode_unit]" class="form-control" required></td>
                    <td><input type="text" name="unit_kompetensi[2][judul_unit]" class="form-control" required></td>
                    <td><input type="text" name="unit_kompetensi[2][kompetensi_kerja]" class="form-control" required></td>
                </tr>
            </tbody>
        </table>
        
        <table border="1" style="border-collapse: collapse; width: 100%;">
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
            <tr>
                <td>1</td>
                <td>Transkrip Nilai Mahasiswa Universitas PGRI Semarang semester 5 dengan nilai minimal C pada mata kuliah Algoritma dan Dasar Pemrograman dan/atau Struktur Data dan/atau Pemrograman Komputer dan/atau Sistem Basis Data dan/atau Desain Web dan/atau Pemrograman Web dan/atau Rekayasa Perangkat Lunak</td>
                <td><input type="checkbox" name="bukti_persyaratan_dasar[1][memenuhi_syarat]" value="1"></td>
                <td><input type="checkbox" name="bukti_persyaratan_dasar[1][tidak_memenuhi_syarat]" value="1"></td>
                <td><input type="text" name="bukti_persyaratan_dasar[1][tidakada]" value=""></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sertifikat pelatihan berbasis kompetensi untuk jabatan Junior Web Programmer yang dilakukan oleh Universitas PGRI Semarang</td>
                <td><input type="checkbox" name="bukti_persyaratan_dasar[2][memenuhi_syarat]" value="1"></td>
                <td><input type="checkbox" name="bukti_persyaratan_dasar[2][tidak_memenuhi_syarat]" value="1"></td>
                <td><input type="text" name="bukti_persyaratan_dasar[2][tidakada]" value=""></td>
            </tr>
        </tbody>
    </table>

            <div class="text-center mt-4 mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYDzN1fQSAfFAPOm6pH/1hXSHMNhpEhhLaB6LD9" crossorigin="anonymous"></script>
@endsection
