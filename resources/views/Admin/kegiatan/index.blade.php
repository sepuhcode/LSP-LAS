@extends('Admin.layout')

@section('page')
    Kegiatan
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">Kegiatan</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-tool btn-outline-info text-white">
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
                                <th>Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($kegiatans->count() > 0)
                                @foreach ($kegiatans as $kegiatan)
                                    <tr>
                                        <td class="td-center text-center">{{ $loop->iteration }}</td>
                                        <td class="td-center text-left">{{ $kegiatan->name }}</td>
                                        <td class="td-center text-left">{{ $kegiatan->date }}</td>
                                        <td class="td-center text-center">
                                            <img data-enlargeable src={{ asset('Images/kegiatan/' . $kegiatan->image) }} alt="" style="cursor: zoom-in;" width="150px">
                                        </td>
                                        <td class="td-center text-center">
                                            <a class="btn btn-outline-success"
                                                href="/admin/kegiatan/{{ $kegiatan->id }}/edit" title="Ubah">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-outline-danger delete-kegiatan"
                                                data-kegiatanId="{{ $kegiatan->id }}"
                                                data-kegiatanName="{{ $kegiatan->name }}" title="Hapus">
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
        $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
            var src = $(this).attr('src');
            var modal;

            function removeModal() {
                modal.remove();
                $('body').off('keyup.modal-close');
            }
            modal = $('<div>').css({
                background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
                backgroundSize: 'contain',
                width: '100%',
                height: '100%',
                position: 'fixed',
                zIndex: '10000',
                top: '0',
                left: '0',
                cursor: 'zoom-out'
            }).click(function() {
                removeModal();
            }).appendTo('body');
            //handling ESC
            $('body').on('keyup.modal-close', function(e) {
                if (e.key === 'Escape') {
                removeModal();
                }
            });
        });
    </script>
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
            $(document).on('click', '.delete-kegiatan', function() {
                var kegiatanId = $(this).attr('data-kegiatanId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-kegiatanName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/kegiatan/' + kegiatanId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
