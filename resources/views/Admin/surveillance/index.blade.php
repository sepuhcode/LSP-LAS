@extends('Admin.layout')

@section('page')
    Surveillance
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">Surveillance</h3>
                        <div class="card-tools">
                            <a class="btn btn-tool btn-outline-info text-white"
                                href="{{ route('admin.surveillance.export') }}"> Export Excel</a>
                            {{-- <a href="{{ route('admin.surveillance.create') }}" class="btn btn-tool btn-outline-info text-white"> Tambah </a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Nomor KTP/NIK</th>
                                    <th>Nomor Sertifikat</th>
                                    <th>Nomor Registrasi Sertifikat</th>
                                    <th>Skema Kompetensi</th>
                                    <th>Sumber Dana Sertifikasi Kompetensi</th>
                                    <th>Tempat Bekerja</th>
                                    <th>Alamat Instansi Tempat Bekerja</th>
                                    <th>Jabatan</th>
                                    <th>Proyek Yang Dikerjakan</th>
                                    <th>Jabatan Dalam Proyek</th>
                                    <th>Apakah Pekerjaan Sesuai SKK?</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data->count() > 0)
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="td-center text-center">{{ $loop->iteration }}</td>
                                            <td class="td-center text-left">{{ $item->nama_lengkap ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->email ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->nomor_hp ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->nomor_identitas ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->nomor_sertifikat ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->nomor_registrasi_sertifikat ?? '' }}
                                            </td>
                                            <td class="td-center text-left">
                                                {{ $item->skemaSertifikasi ? $item->skemaSertifikasi->name : '' }}</td>
                                            <td class="td-center text-left">
                                                {{ $item->sumberDanaSertifikasi ? $item->sumberDanaSertifikasi->name : '' }}
                                            </td>
                                            <td class="td-center text-left">{{ $item->nama_tempat_bekerja ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->alamat_tempat_bekerja ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->jabatan_ditempat_kerja ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->proyek_sedang_dikerjakan ?? '' }}
                                            </td>
                                            <td class="td-center text-left">{{ $item->jabatan_dalam_proyek ?? '' }}</td>
                                            <td class="td-center text-left text-capitalize">
                                                {{ $item->pekerjaan_sesuai_skk ?? '' }}</td>
                                            <td class="td-center text-left">{{ $item->pekerjaan_sesuai_skk_text ?? '' }}
                                            </td>
                                            <td class="td-center text-center">
                                                {{-- <a class="btn btn-outline-success" href="/admin/surveillance/{{ $item->id }}/edit" title="Ubah"> <i class="fas fa-edit"></i> </a> --}}
                                                <button class="btn btn-outline-danger delete-item"
                                                    data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                    title="Hapus">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            $('#myTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            bsCustomFileInput.init();
        });
    </script>
    <script>
        $(function() {
            $(document).on('click', '.delete-item', function() {
                var item = $(this).attr('data-id');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-name') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/surveillance/' + item);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
