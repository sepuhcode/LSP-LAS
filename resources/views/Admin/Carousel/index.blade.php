@extends('Admin.layout')

@section('page')
    Carousel
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">Carousel</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.carousel.create') }}" class="btn btn-tool btn-outline-info text-white">
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
                                <th>Gambar</th>
                                <th>Visibility</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($carousels->count() > 0)
                                @foreach ($carousels as $carousel)
                                    <tr>
                                        <td class="td-center text-center">{{ $loop->iteration }}</td>
                                        <td class="td-center text-center"><img data-enlargeable src={{ asset('Images/carousel-img/' . $carousel->image) }} alt="" style="cursor: zoom-in;" width="150px"></td>
                                        <td class="td-center text-center">
                                            <form action="/admin/carousel/{{ $carousel->id }}" method="post">
                                                @method('put')
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-outline-success">{{ $carousel->visibility ? 'Sembunyikan' : 'Tampilkan' }}</button>
                                            </form>
                                        </td>
                                        <td class="td-center text-center">
                                            <button class="btn btn-outline-danger delete-carousel"
                                                data-carouselId="{{ $carousel->id }}"
                                                data-carouselName="{{ $carousel->name }}" title="Hapus">
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
            $('.delete-carousel').on('click', function() {
                var carouselId = $(this).attr('data-carouselId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-carouselName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/carousel/' + carouselId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
