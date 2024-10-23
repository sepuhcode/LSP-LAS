@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">TUK</h3>
                    <div class="card-tools">
                        <button class="btn btn-tool btn-outline-info"><a
                                href="/admin/tuk/create" style="color: white">Upload TUK</a></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama TUK</th>
                                <th>Alamat</th>
                                <th>Pemilik TUK</th>
                                <th>Gambar</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($tuks->count() > 0)
                                @foreach ($tuks as $tuk)
                                    <tr>
                                        <td id="td-center">{{ $loop->iteration }}</td>
                                        <td id="td-center">{{ $tuk->name }}</td>
                                        <td id="td-center">{{ $tuk->address }}</td>
                                        <td id="td-center">{{ $tuk->tukOwner?->name==null?'':$tuk->tukOwner->name }}</td>
                                        <td id="td-center"><img src={{ asset('Images/tuk-img/' . $tuk->image) }}
                                                alt="" width="150px"></td>
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/tuk/{{ $tuk->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        <td id="td-center">
                                            <button class="btn btn-outline-danger delete-tuk"
                                                data-tukId="{{ $tuk->id }}" data-tukName="{{ $tuk->name }}">
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

{{-- script sweetalert --}}
@push('script')
    <script>
        $(function() {
            $('.delete-tuk').on('click', function() {
                var tukId = $(this).attr('data-tukId');
                Swal.fire({
                    title: 'Are You Sure?',
                    text: "delete " + $(this).attr('data-tukName') +
                        " ?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#form-delete').attr('action', '/admin/tuk/' + tukId);
                        $('#form-delete').submit();
                    }
                });
            });
        });
    </script>
@endpush
