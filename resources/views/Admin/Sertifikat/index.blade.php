@extends('admin.layout')

@section('page')
    Sertifikat
@endsection

@push('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">User</h3>
                        <div class="card-tools">
                            <a class="btn btn-tool btn-outline-info text-white"
                                href="{{ route('admin.sertifikat.import.create') }}">
                                Import Excel
                            </a>
                            <a href="{{ route('admin.sertifikat.create') }}"
                                class="btn btn-tool btn-outline-info text-white">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No.Sertifikat</th>
                                <th>No.Registrasi Sertifikat</th>
                                <th>Skema Sertifikasi</th>
                                <th>Posisi Las</th>
                                <th>TUK</th>
                                <th>No.Blangko</th>
                                <th>Tanggal Uji</th>
                                <th>Tanggal Sertifikat</th>
                                <th>Asesor 1</th>
                                <th>Asesor 2</th>
                                <th>Scan Sertifikat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($sertifikats->count() > 0)
                                @foreach ($sertifikats as $sertifikat)
                                    <tr>
                                        <td class="td-center text-center">{{ $loop->iteration }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->name }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->no_sertifikat }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->no_reg_sertifikat }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->skemaSertifikasi->name }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->posisiLas->name }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->tuk }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->no_blangko }}</td>
                                        <td class="td-center text-left">{{ $sertifikat->tgl_uji }}</td>
                                        <td class="td-center text-left">
                                            {{ strtotime('01-01-1970') == strtotime($sertifikat->tgl_sertifikat) ? '' : date('d-m-Y', strtotime($sertifikat->tgl_sertifikat)) }}
                                        </td>
                                        <td class="td-center text-left">{{ $sertifikat->asesor->name }}</td>
                                        <td class="td-center text-left">
                                            {{ $sertifikat->asesor2 != null ? $sertifikat->asesor2->name : '' }}
                                        </td>
                                        <td class="td-center text-center">
                                            @if ($sertifikat->file_scan_sertifikat != null)
                                                <button target="_blank" class="btn btn-view btn-outline-success">
                                                    <a style="color: white" target="_blank"
                                                        href="/admin/view-file/{{ $sertifikat->file_scan_sertifikat }}">
                                                        View
                                                    </a>
                                                </button>
                                            @endif
                                        </td>
                                        <td class="td-center text-center">
                                            <a class="btn btn-outline-success"
                                                href="/admin/sertifikat/{{ $sertifikat->id }}/edit" title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-outline-danger delete-sertifikat"
                                                data-sertifikatId="{{ $sertifikat->id }}"
                                                data-sertifikatName="{{ $sertifikat->name }}" title="Hapus">
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
            $('.delete-sertifikat').on('click', function() {
                var sertifikatId = $(this).attr('data-sertifikatId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-sertifikatName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/sertifikat/' + sertifikatId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
