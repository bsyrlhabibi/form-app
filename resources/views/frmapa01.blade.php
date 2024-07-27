<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FR.MAPA.01- MERENCANAKAN AKTIVITAS DAN PROSES ASESMEN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">FR.MAPA.01- MERENCANAKAN AKTIVITAS DAN PROSES ASESMEN</h2>
    
    <form method="POST" action="{{ route('frmapa01.store') }}">
        @csrf

        <div class="form-group mb-3">
            <div class="row">
                <div class="col-md-2">
                    <label>Kandidat:</label>
                </div>
                <div class="col-md-10">
                    <div class="form-check">
                        <input type="checkbox" name="kandidat[]" value="hasil" class="form-check-input" {{ in_array('hasil', old('kandidat', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Hasil pelatihan dan / atau pendidikan: mahasiswa UPGRIS</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kandidat[]" value="pekerja" class="form-check-input" {{ in_array('pekerja', old('kandidat', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Pekerja berpengalaman</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kandidat[]" value="pelatihan" class="form-check-input" {{ in_array('pelatihan', old('kandidat', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Pelatihan / belajar mandiri</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col-md-2">
                    <label>Tujuan:</label>
                </div>
                <div class="col-md-10">
                    <div class="form-check">
                        <input type="checkbox" name="tujuan[]" value="sertifikasi" class="form-check-input" {{ in_array('sertifikasi', old('tujuan', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Sertifikasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="tujuan[]" value="sertifikasi_ulang" class="form-check-input" {{ in_array('sertifikasi_ulang', old('tujuan', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Sertifikasi Ulang</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="tujuan[]" value="pkt" class="form-check-input" {{ in_array('pkt', old('tujuan', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Pengakuan Kompetensi Terkini (PKT)</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="tujuan[]" value="rpl" class="form-check-input" {{ in_array('rpl', old('tujuan', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Rekognisi Pembelajaran Lampau</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="tujuan[]" value="lainnya" class="form-check-input" {{ in_array('lainnya', old('tujuan', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Lainnya</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="row">
                <div class="col-md-2">
                    <label>Konteks:</label>
                </div>
                <div class="col-md-10">
                <div class="form-check">
                    <input type="checkbox" name="konteks[]" value="nyata" class="form-check-input"{{ in_array('nyata', old('konteks', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" >Tempat kerja nyata</label>
                    <input type="checkbox" name="konteks[]" value="simulasi" class="form-check-input" style="margin-left: 10px;" {{ in_array('simulasi', old('konteks', [])) ? 'checked' : '' }}>
                <label class="form-check-label" style="margin-left: 30px;">Tempat kerja simulasi</label>
                </div>
                    
                    <div class="form-check">
                        <input type="checkbox" name="konteks[]" value="tersedia" class="form-check-input" {{ in_array('tersedia', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Tersedia</label>
                        <input type="checkbox" name="konteks[]" value="terbatas" class="form-check-input"  style="margin-left: 10px;" {{ in_array('terbatas', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" style="margin-left: 30px;">Terbatas</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konteks[]" value="bukti" class="form-check-input" {{ in_array('bukti', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Bukti untuk mendukung asesmen / RPL: ☺ 😐 ☹</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konteks[]" value="aktivitas" class="form-check-input" {{ in_array('aktivitas', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Aktivitas kerja di tempat kerja Asesi: ☺ 😐 ☹</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konteks[]" value="kegiatan" class="form-check-input" {{ in_array('kegiatan', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Kegiatan Pembelajaran: ☺ 😐 ☹</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konteks[]" value="lembaga" class="form-check-input" {{ in_array('lembaga', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Lembaga Sertifikasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konteks[]" value="organisasi" class="form-check-input" {{ in_array('organisasi', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Organisasi Pelatihan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konteks[]" value="asesor" class="form-check-input" {{ in_array('asesor', old('konteks', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Asesor Perusahaan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <div class="row">
                <div class="col-md-2">
                    <label>Konfirmasi:</label>
                </div>
                <div class="col-md-10">
                    <div class="form-check">
                        <input type="checkbox" name="konfirmasi[]" value="lsp" class="form-check-input" {{ in_array('lsp', old('konfirmasi', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Manajer sertifikasi LSP</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konfirmasi[]" value="master" class="form-check-input" {{ in_array('master', old('konfirmasi', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Master Asesor / Master Trainer / Asesor Utama Kompetensi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konfirmasi[]" value="manajer" class="form-check-input" {{ in_array('manajer', old('konfirmasi', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Manajer Pelatihan Lembaga Training terakreditasi / Lembaga Training terdaftar</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="konfirmasi[]" value="lainnya" class="form-check-input" {{ in_array('lainnya', old('konfirmasi', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">Lainnya</label>
                    </div>
                </div>
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
