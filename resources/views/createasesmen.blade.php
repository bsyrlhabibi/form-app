<!-- View: resources/views/asesmen/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Asesmen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-check {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Tambah Asesmen</h1>
<form action="{{ route('asesmen.store') }}" method="POST">
    @csrf
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
            <!-- Elemen 1 -->
            <tr>
                <td>
                Elemen 1: Memilih tools pemrograman yang sesuai dengan kebutuhan
                </br>•	Kriteria Unjuk Kerja:
                </br>1.1.	Platform       (lingkungan)       yang       akan digunakan	untuk     menjalankan     tools pemrograman	diidentifikasi         sesuai dengan kebutuhan.
                </br>1.2.	Tools  bahasa  pemrogram  dipilih  sesuai dengan	kebutuhaan     dan     lingkungan pengembangan..

                </td>
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="1" id="elemen1_k" name="elemen1_k">
                </td>
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="1" id="elemen1_bk" name="elemen1_bk">
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen1_bukti1" name="elemen1_bukti1">
                        <label class="form-check-label" for="elemen1_bukti1">Bukti 1</label>
                        <P>Surat rekomendasi dari pimpinan yang menyatakan sudah bekerja minimal 3 tahun: atau </p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen1_bukti2" name="elemen1_bukti2">
                        <label class="form-check-label" for="elemen1_bukti2">Bukti 2</label>
                        <P>Surat rekomendasi dari asosiasi/ HRD/ Kaprodi/ Dekan/ Rektor/ Wakil Rektor yang menyatakan dia kompeten di bidangnya</p>
                        <P>atau</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen1_bukti3" name="elemen1_bukti3">
                        <label class="form-check-label" for="elemen1_bukti3">Bukti 3</label>
                        <p>Laporan pekerjaan/ work order bahwa dia mengerjakan minimal 3 project / BKD </p>
                        <P>atau</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen1_bukti4" name="elemen1_bukti4">
                        <label class="form-check-label" for="elemen1_bukti4">Bukti 4</label>
                        <p>Sertifikat kompetensi teknis sesuai bidangnya</p>
                        <P>atau</p>
                    </div>
                </td>
            </tr>
            <!-- Elemen 2 -->
            <tr>
                <td>
                Elemen 2: Instalasi tool pemrograman.
                </br>•	Kriteria Unjuk Kerja:
                </br>2.1.	Tools     pemrogaman     ter-install     sesuai dengan prosedur.
                </br>2.2.	Tools   pemrograman   bisa   dijalankan   di lingkungan	pengembangan    yang    telah ditetapkan.

                </td>
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="1" id="elemen2_k" name="elemen2_k">
                </td>
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="1" id="elemen2_bk" name="elemen2_bk">
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen2_bukti1" name="elemen2_bukti1">
                        <label class="form-check-label" for="elemen2_bukti1">Bukti 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen2_bukti2" name="elemen2_bukti2">
                        <label class="form-check-label" for="elemen2_bukti2">Bukti 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen2_bukti3" name="elemen2_bukti3">
                        <label class="form-check-label" for="elemen2_bukti3">Bukti 3</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen2_bukti4" name="elemen2_bukti4">
                        <label class="form-check-label" for="elemen2_bukti4">Bukti 4</label>
                    </div>
                </td>
            </tr>

            <!-- Elemen 3 -->
            <tr>
                <td>
                Elemen 3: Instalasi tool pemrograman.
                </br>•	Kriteria Unjuk Kerja:
                </br>2.1.	Tools     pemrogaman     ter-install     sesuai dengan prosedur.
                </br>2.2.	Tools   pemrograman   bisa   dijalankan   di lingkungan	pengembangan    yang    telah ditetapkan.

                </td>
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="1" id="elemen3_k" name="elemen3_k">
                </td>
                <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="1" id="elemen3_bk" name="elemen3_bk">
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen3_bukti1" name="elemen3_bukti1">
                        <label class="form-check-label" for="elemen2_bukti1">Bukti 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen3_bukti2" name="elemen3_bukti2">
                        <label class="form-check-label" for="elemen2_bukti2">Bukti 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen3_bukti3" name="elemen3_bukti3">
                        <label class="form-check-label" for="elemen2_bukti3">Bukti 3</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="elemen3_bukti4" name="elemen3_bukti4">
                        <label class="form-check-label" for="elemen2_bukti4">Bukti 4</label>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
