@extends('Admin.layout')

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
                        <h3 class="card-title mb-0">Sertifikat</h3>
                        <div class="card-tools">
                            <button id="btn-bulk-delete" class="btn btn-tool btn-outline-danger text-white" disabled>
                                <i class="fas fa-trash-alt mr-1"></i> Hapus Terpilih (<span id="selected-count">0</span>)
                            </button>

                            <form id="form-bulk-delete" action="{{ route('admin.sertifikat.bulk-destroy') }}" method="POST"
                                style="display:none">
                                @csrf
                                <div id="bulk-ids"></div>
                            </form>

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
                                <th><input type="checkbox" id="check-all" title="Pilih Semua"></th>
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
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            function syncBulkButton() {
                var checked = $('.row-check:checked').length;
                var total = $('.row-check').length;
                $('#selected-count').text(checked);
                $('#btn-bulk-delete').prop('disabled', checked === 0);
                $('#check-all').prop('indeterminate', checked > 0 && checked < total);
                $('#check-all').prop('checked', total > 0 && checked === total);
            }

            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.sertifikat.datatable') }}',
                columns: [
                    // 0 – Checkbox
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
                        render: function(data, type, row) {
                            return '<input type="checkbox" class="row-check" value="' + row.id +
                                '">';
                        }
                    },
                    // 1 – No
                    {
                        data: 'no',
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
                        render: function(data, type, row) {
                            return '<span style="cursor:pointer; font-weight: bold;" class="d-flex align-items-center">' +
                                '<i class="fas fa-chevron-right expand-icon" style="margin-right: 8px; color: #fff; transition: transform 0.2s;"></i>' +
                                data + '</span>';
                        }
                    },
                    // 2 – Nama
                    {
                        data: 'name'
                    },
                    // 3 – No.Sertifikat
                    {
                        data: 'no_sertifikat'
                    },
                    // 4 – No.Reg Sertifikat
                    {
                        data: 'no_reg_sertifikat'
                    },
                    // 5 – Skema
                    {
                        data: 'skema_sertifikasi'
                    },
                    // 6 – Posisi Las
                    {
                        data: 'posisi_las'
                    },
                    // 7 – TUK
                    {
                        data: 'tuk'
                    },
                    // 8 – No.Blangko
                    {
                        data: 'no_blangko'
                    },
                    // 9 – Tanggal Uji
                    {
                        data: 'tgl_uji'
                    },
                    // 10 – Tanggal Sertifikat
                    {
                        data: 'tgl_sertifikat'
                    },
                    // 11 – Asesor 1
                    {
                        data: 'asesor'
                    },
                    // 12 – Asesor 2
                    {
                        data: 'asesor2'
                    },
                    // 13 – Scan Sertifikat
                    {
                        data: 'file_scan_sertifikat',
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
                        render: function(data) {
                            if (!data) {
                                return '';
                            }
                            return '<a class="btn btn-outline-success btn-sm" href="/admin/view-file/' +
                                data +
                                '" target="_blank">View</a>';
                        }
                    },
                    // 14 – Aksi
                    {
                        data: 'id',
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
                        render: function(data, type, row) {
                            return '<div class="d-flex justify-content-center">' +
                                '<a class="btn btn-outline-success btn-sm" href="/admin/sertifikat/' +
                                data + '/edit" title="Ubah">' +
                                '<i class="fas fa-edit"></i>' +
                                '</a>' +
                                '<button class="btn btn-outline-danger btn-sm delete-sertifikat ml-1"' +
                                ' data-sertifikatId="' + data + '"' +
                                ' data-sertifikatName="' + row.name + '"' +
                                ' title="Hapus">' +
                                '<i class="fas fa-trash-alt"></i>' +
                                '</button>' +
                                '</div>';
                        }
                    },
                ],
                columnDefs: [
                    // Checkbox and actions always stay visible
                    {
                        responsivePriority: 1,
                        targets: [0, 14]
                    },
                    // "No" column stays visible — it also carries the expand toggle (see responsive.details)
                    {
                        responsivePriority: 2,
                        targets: 1
                    },
                    // Core identity columns next
                    {
                        responsivePriority: 3,
                        targets: [2, 3]
                    },
                ],
                // Move the responsive expand control to column 1 ("No") so that
                // clicking the checkbox (column 0) never accidentally expands the row.
                responsive: {
                    details: {
                        type: 'column',
                        target: 1,
                    }
                },
                order: [
                    [3, 'asc']
                ],
                pageLength: 25,
                autoWidth: false,
                language: {
                    processing: 'Memuat data...',
                    search: 'Cari:',
                    lengthMenu: 'Tampilkan _MENU_ data',
                    info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
                    infoEmpty: 'Tidak ada data',
                    infoFiltered: '(difilter dari _MAX_ total data)',
                    zeroRecords: 'Data tidak ditemukan',
                    paginate: {
                        first: 'Pertama',
                        last: 'Terakhir',
                        next: 'Berikutnya',
                        previous: 'Sebelumnya',
                    }
                },
            });

            // Reset checkboxes and button state on every DataTables redraw
            table.on('draw', function() {
                $('#check-all').prop('checked', false).prop('indeterminate', false);
                syncBulkButton();
            });

            // Rotate expand icon on row expand/collapse
            table.on('responsive-display', function(e, datatable, row, showHide, update) {
                var icon = row.node().querySelector('.expand-icon');
                if (icon) {
                    if (showHide) {
                        // Expanding - rotate down
                        $(icon).css('transform', 'rotate(90deg)');
                    } else {
                        // Collapsing - rotate back
                        $(icon).css('transform', 'rotate(0deg)');
                    }
                }
            });

            // ── Checkbox multi-select ──────────────────────────────────────────
            $(document).on('change', '#check-all', function() {
                $('.row-check').prop('checked', $(this).is(':checked'));
                syncBulkButton();
            });

            $(document).on('change', '.row-check', function() {
                syncBulkButton();
            });

            // ── Bulk delete ────────────────────────────────────────────────────
            $('#btn-bulk-delete').on('click', function() {
                var ids = $('.row-check:checked').map(function() {
                    return $(this).val();
                }).get();

                if (ids.length === 0) {
                    return;
                }

                Swal.fire({
                    title: 'Hapus ' + ids.length + ' sertifikat?',
                    text: 'Data yang dihapus tidak dapat dikembalikan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then(function(result) {
                    if (!result.isConfirmed) {
                        return;
                    }

                    var $container = $('#bulk-ids').empty();
                    $.each(ids, function(i, id) {
                        $container.append(
                            $('<input>').attr({
                                type: 'hidden',
                                name: 'ids[]',
                                value: id
                            })
                        );
                    });
                    $('#form-bulk-delete').submit();
                });
            });

            // ── Single-row delete ──────────────────────────────────────────────
            $(document).on('click', '.delete-sertifikat', function() {
                var sertifikatId = $(this).attr('data-sertifikatId');
                var sertifikatName = $(this).attr('data-sertifikatName');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Delete ' + sertifikatName + '?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/sertifikat/' + sertifikatId);
                        $('#form-delete').submit();
                    }
                });
            });

            bsCustomFileInput.init();
        });
    </script>
@endpush
