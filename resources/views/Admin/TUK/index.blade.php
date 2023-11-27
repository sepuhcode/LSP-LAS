@extends('Admin.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">TUK</h3>
                    <button class="btn btn-outline-info" style="position: absolute; right:20px; top:15px"><a href="/admin/tuk/create">Upload TUK</a></button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover" style="text-align: center; ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
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
                                        <td id="td-center"><img src={{ asset('Images/tukImg/' . $tuk->image) }} alt=""
                                                width="150px"></td>
                                        <td id="td-center"><button class="btn btn-outline-success"><a
                                                    href="/admin/tuk/{{ $tuk->id }}/edit"
                                                    style="text-decoration: none; color:inherit;"><i
                                                        class="fas fa-edit"></i></a></button></td>
                                        {{-- <td>hehehe</td> --}}
                                        <td id="td-center">
                                            <form action="/admin/tuk/{{ $tuk->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger" type="submit"
                                                    onClick="return confirm('yakin mau dihapus?');"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
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
