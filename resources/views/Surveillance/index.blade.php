@extends('layouts.app')

@push('style')
@endpush

@section('content')
    <div class="container">
        <div class="mt-5 alert alert-info" role="alert">
            <h1 class="display-6">Informasi!</h1>
            <p class="mb-5" style="text-align: justify">Dalam rangka pemenuhan pemeliharaan sertifikasi yang telah ditetapkan oleh LSP Geoteknik Indonesia dengan melakukan surveilans kepada Pemegang Sertifikat Kompetensi Kerja setiap satu (1) tahun sekali dan berdasarkan Peraturan Badan Nasional Sertifikasi Kompetensi (BNSP) Nomor 2/BNSP/VIII/2017 tentang Pedoman Pengembangan dan Pemeliharaan Skema Sertifikasi Profesi bahwa pemegang sertifikat wajib dilakukan surveilans terhadap kompetensi yang sudah didapatkan berdasarkan skema sertifikat, untuk itu mohon kesediaan Saudara/i Pemegang Sertifikat Kompetensi Kerja yang telah dikeluarkan oleh LSP Geoteknik Indonesia untuk mengisi formulir ini. Data yang diberikan akan kami jaga kerahasiaannya sesuai Standar Operasi Prosedur (SOP) yang berlaku di LSP Geoteknik Indonesia.</p>
        </div>
        <form class="my-5">
            <div style="grid-template-columns: 1fr 1fr;" class="d-md-grid gap-0 column-gap-3">
                <div class="mb-3">
                    <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="inputNamaLengkap" aria-describedby="inputNamaLengkap">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="inputEmail">
                </div>
                <div class="mb-3">
                    <label for="inputNomorHandphone" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="inputNomorHandphone">
                </div>
                <div class="mb-3">
                    <label for="inputNomorSertifikat" class="form-label">Nomor Sertifikat</label>
                    <input type="text" class="form-control" id="inputNomorSertifikat">
                </div>
                <div class="mb-3">
                    <label for="nomorRegistrasiSertifikat" class="form-label">Nomor Registrasi Sertifikat</label>
                    <input type="text" class="form-control" id="nomorRegistrasiSertifikat">
                </div>
                <div class="mb-3">
                    <label for="selectSkemaKomptensi" class="form-label">Skema Kompetensi</label>
                    <select class="form-select" id="selectSkemaKomptensi" aria-label="skema kompetensi select">
                        <option disabled selected>Pilih Skema..</option>
                        @forelse ($skemaSertifikasis as $skemaSertifikasi)
                            <option value="{{ $skemaSertifikasi->id }}">{{ $skemaSertifikasi->name . ' (' . $skemaSertifikasi->no_skema . ')' }}</option>
                        @empty
                            <option disabled selected>Tidak ada data</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    {{-- !!! --}}
                    <label for="selectSumberDanaSertifikasiKompetensi" class="form-label">Sumber Dana Sertifikasi Kompetensi</label>
                    <select class="form-select" id="selectSumberDanaSertifikasiKompetensi" aria-label="sumber dana sertifikat kompetensi select">
                        <option disabled selected>Pilih Sumber Dana..</option>
                        <option disabled>Tidak ada data</option>
                    </select>
                    {{-- !!! --}}
                </div>
                <div class="mb-3">
                    <label for="inputNamaPerusahaan" class="form-label">Tempat Bekerja (Nama Perusahaan)</label>
                    <input type="text" class="form-control" id="inputNamaPerusahaan">
                </div>
                <div class="mb-3">
                    <label for="inputAlamatInstansi" class="form-label">Alamat Instansi Tempat Bekerja</label>
                    <input type="text" class="form-control" id="inputAlamatInstansi">
                </div>
                <div class="mb-3">
                    <label for="inputJabatanTempatKerja" class="form-label">Jabatan (di tempat kerja)</label>
                    <input type="text" class="form-control" id="inputJabatanTempatKerja">
                </div>
                <div class="mb-3">
                    <label for="inputProyek" class="form-label">Proyek yang dikerjakan saat ini</label>
                    <input type="text" class="form-control" id="inputProyek">
                </div>
                <div class="mb-3">
                    <label for="inputJabatanProyek" class="form-label">Jabatan dalam Proyek</label>
                    <input type="text" class="form-control" id="inputJabatanProyek">
                </div>
            </div>
            <div class="mb-3">
                <p class="mb-2">Apakah pekerjaan saat ini sesuai dengan kompetensi atau Sertifikat Kompetensi (SKK) yang dimiliki?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pekerjaan_sesuai_skk" id="pekerjaan_sesuai_skk_true">
                    <label class="form-check-label" for="pekerjaan_sesuai_skk_true">
                        Sesuai
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pekerjaan_sesuai_skk" id="pekerjaan_sesuai_skk_false">
                    <label class="form-check-label" for="pekerjaan_sesuai_skk_false">
                        Tidak Sesuai
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@push('scripts')
@endpush
