@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/survei-sertifikat-page.css') }}">
@endpush

@section('content')
    <div class="container title-page">
        <p class="text-sertif-center">Surveillance Pemegang Sertifikat</p>
        <p class="text-sertif-center-p">Formulir surveillance pemegang sertifikat kompetensi</p>
    </div>
    <div class="container py-5">
        {{-- <div class="heading">
            <h3 class="text-uppercase"><span style="color: red">Surveillance</span> Pemegang Sertifikat Kompetensi</h3>
            <hr class="my-4">
        </div> --}}
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <h1 class="display-6">Informasi:</h1>
            <p class="mb-5" style="text-align: justify">Dalam rangka pemenuhan pemeliharaan sertifikasi yang telah
                ditetapkan oleh LSP Geoteknik Indonesia dengan melakukan surveilans kepada Pemegang Sertifikat Kompetensi
                Kerja setiap satu (1) tahun sekali dan berdasarkan Peraturan Badan Nasional Sertifikasi Kompetensi (BNSP)
                Nomor 2/BNSP/VIII/2017 tentang Pedoman Pengembangan dan Pemeliharaan Skema Sertifikasi Profesi bahwa
                pemegang sertifikat wajib dilakukan surveilans terhadap kompetensi yang sudah didapatkan berdasarkan skema
                sertifikat, untuk itu mohon kesediaan Saudara/i Pemegang Sertifikat Kompetensi Kerja yang telah dikeluarkan
                oleh LSP Geoteknik Indonesia untuk mengisi formulir ini. Data yang diberikan akan kami jaga kerahasiaannya
                sesuai Standar Operasi Prosedur (SOP) yang berlaku di LSP Geoteknik Indonesia.
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <form action="/surveillance" method="POST">
            @csrf
            <div style="grid-template-columns: 1fr 1fr;" class="d-md-grid gap-0 column-gap-3">
                <div class="mb-3">
                    <label for="inputNamaLengkap" class="form-label">Nama Lengkap<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="inputNamaLengkap" aria-describedby="inputNamaLengkap"
                        placeholder="Nama Lengkap" name="nama_lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="inputEmail"
                        placeholder="Email" name="email">
                </div>
                <div class="mb-3">
                    <label for="inputNomorHP" class="form-label">Nomor HP<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="inputNomorHP" placeholder="Nomor HP" name="nomor_hp"
                        required>
                </div>
                <div class="mb-3">
                    <label for="inputIdentitas" class="form-label">Nomor KTP/NIK<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="inputIdentitas" placeholder="Nomor KTP/NIK"
                        name="nomor_identitas" required>
                </div>
                <div class="mb-3">
                    <label for="inputNomorSertifikat" class="form-label">Nomor Sertifikat<span
                            style="color: red">*</span></label>
                    <input type="text" class="form-control" id="inputNomorSertifikat"
                        placeholder="XXXXX XXXX XXXXXXX 20XX" name="nomor_sertifikat" required>
                </div>
                <div class="mb-3">
                    <label for="nomorRegistrasiSertifikat" class="form-label">Nomor Registrasi Sertifikat<span
                            style="color: red">*</span></label>
                    <input type="text" class="form-control" id="nomorRegistrasiSertifikat"
                        placeholder="Reg. XXXX XXXXXX XX XXXX" name="nomor_registrasi_sertifikat" required>
                </div>
                <div class="mb-3">
                    <label for="selectSkemaKompetensi" class="form-label">Skema Kompetensi<span
                            style="color: red">*</span></label>
                    <select class="form-select" id="selectSkemaKompetensi" aria-label="skema kompetensi select"
                        name="skema_kompetensi_id" required>
                        <option disabled selected>Pilih Skema..</option>
                        @forelse ($danaSkemaSertifikasi as $skemaSertifikasi)
                            <option value="{{ $skemaSertifikasi->id }}">
                                {{ $skemaSertifikasi->name . ' (' . $skemaSertifikasi->no_skema . ')' }}</option>
                        @empty
                            <option disabled selected>Tidak ada data</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="selectSumberDanaSertifikasiKompetensi" class="form-label">Sumber Dana Sertifikasi
                        Kompetensi<span style="color: red">*</span></label>
                    <select class="form-select" id="selectSumberDanaSertifikasiKompetensi"
                        aria-label="sumber dana sertifikat kompetensi select" name="sumber_dana_sertifikasi_id" required>
                        <option disabled selected>Pilih Sumber Dana..</option>
                        @forelse ($dataSumberDanaSertifikasi as $sumberDanaSertifikasi)
                            <option value="{{ $sumberDanaSertifikasi->id }}">
                                {{ $sumberDanaSertifikasi->name }}</option>
                        @empty
                            <option disabled selected>Tidak ada data</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputNamaPerusahaan" class="form-label">Tempat Bekerja (Nama Perusahaan)</label>
                    <input type="text" class="form-control" id="inputNamaPerusahaan"
                        placeholder="Nama Perusahaan tempat bekerja" name="nama_tempat_bekerja">
                </div>
                <div class="mb-3">
                    <label for="inputAlamatInstansi" class="form-label">Alamat Instansi Tempat Bekerja</label>
                    <input type="text" class="form-control" id="inputAlamatInstansi"
                        placeholder="Alamat tempat bekerja" name="alamat_tempat_bekerja">
                </div>
                <div class="mb-3">
                    <label for="inputJabatanTempatKerja" class="form-label">Jabatan (di tempat kerja)</label>
                    <input type="text" class="form-control" id="inputJabatanTempatKerja"
                        placeholder="Jabatan di tempat kerja" name="jabatan_ditempat_kerja">
                </div>
                <div class="mb-3">
                    <label for="inputProyek" class="form-label">Proyek yang dikerjakan saat ini</label>
                    <input type="text" class="form-control" id="inputProyek"
                        placeholder="Nama proyek yang dikerjakan" name="proyek_sedang_dikerjakan">
                </div>
                <div class="mb-3">
                    <label for="inputJabatanProyek" class="form-label">Jabatan dalam Proyek</label>
                    <input type="text" class="form-control" id="inputJabatanProyek"
                        placeholder="Jabatan dalam proyek yang dikerjakan" name="jabatan_dalam_proyek">
                </div>
                <div class="mb-3">
                    <p class="mb-2">Apakah pekerjaan saat ini sesuai dengan kompetensi atau Sertifikat Kompetensi (SKK)
                        yang
                        dimiliki?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan_sesuai_skk"
                            id="pekerjaan_sesuai_skk_true" value="sesuai">
                        <label class="form-check-label" for="pekerjaan_sesuai_skk_true">
                            Sesuai
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pekerjaan_sesuai_skk"
                            id="pekerjaan_sesuai_skk_false" value="tidak_sesuai">
                        <label class="form-check-label" for="pekerjaan_sesuai_skk_false">
                            Tidak Sesuai
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="pekerjaan_sesuai_skk_others"
                            name="pekerjaan_sesuai_skk" value="lainnya">
                        <label class="form-check-label" for="pekerjaan_sesuai_skk_others">
                            Lainnya
                        </label>
                    </div>
                    <div id="pekerjaan_sesuai_skk_input" class="mt-2" style="display:none;">
                        <input type="text" class="form-control" name="pekerjaan_sesuai_skk_text"
                            placeholder="Lainnya...">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('input[name="pekerjaan_sesuai_skk"]').forEach((el) => {
            el.addEventListener('change', function() {
                const othersInput = document.getElementById('pekerjaan_sesuai_skk_input');
                if (this.id === 'pekerjaan_sesuai_skk_others') {
                    othersInput.style.display = 'block';
                } else {
                    othersInput.style.display = 'none';
                }
            });
        });
    </script>
@endpush
