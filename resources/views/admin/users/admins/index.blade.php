@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session()->has('success') && session()->get('success'))
                <div class="alert alert-success">
                    Thao tác thành công
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.users.admins.create') }}">
                        <button class="btn btn-primary">Thêm tài khoản</button>
                    </a>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $key => $item)
                            @endforeach

                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->type }}</td>
                                <td>
                                    <a href="{{ route('admin.users.admins.edit', $item->id) }}"
                                        class="btn btn-warning">Chỉnh sửa</a>
                                    <form action="{{ route('admin.users.admins.reset-password', $item->id) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn reset mật khẩu?')">Reset
                                            Password</button>
                                    </form>
                                </td>

                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
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
