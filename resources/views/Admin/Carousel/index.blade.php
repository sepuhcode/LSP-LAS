@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Carousel</h3>
                    <div class="card-tools">
                        <button class="btn btn-tool btn-outline-info"><a
                                href="/admin/gambar-carousel/create" style="color: white">Upload Carousel</a></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="carousel-table" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Visibility</th>
                                <th>Delete</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($carousels->count() > 0)
                                @foreach ($carousels as $carousel)
                                    <tr>
                                        <td id="td-center">{{ $loop->iteration }}</td>
                                        <td id="td-center"><img src={{ asset('Images/carousel-img/' . $carousel->image) }}
                                                alt="" width="150px"></td>
                                        <td id="td-center">
                                            {{-- <button class="btn btn-outline-success"><a
                                                    href="/admin/carousel/{{ $carousel->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button> --}}

                                            <form action="/admin/gambar-carousel/{{ $carousel->id }}" method="post">
                                                @method('put')
                                                @csrf
                                                {{-- <input type="submit" value="{{ $carousel->visibility ? 'Hide' : 'Show' }}"> --}}
                                                <button type="submit" class="btn btn-outline-success"
                                                    style="text-decoration: none; ">{{ $carousel->visibility ? 'Sembunyikan' : 'Tampilkan' }}</button>
                                            </form>
                                        </td>
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-carousel"
                                                data-carouselId="{{ $carousel->id }}"
                                                data-carouselName="{{ $carousel->name }}">
                                                <i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection

@push('script')
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
                        $('#form-delete').attr('action', '/admin/gambar-carousel/' + carouselId);
                        $('#form-delete').submit();
                    }
                });
            });
        });


        // datatable
        $(function() {
            $('#carousel-table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            // //bs custom file input
            // bsCustomFileInput.init();
        });
    </script>
@endpush
