@extends('admin.layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lí Tin tức</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('news.create') }}">
                                <button class="btn btn-primary">Thêm tin tức mới</button>
                            </a>
                        </div>

                        @if (session()->has('success') && session()->get('success'))
                            <div class="alert alert-success mt-3">
                                Thao tác thành công
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên tiêu đề</th>
                                        <th>Ảnh tin tức</th>
                                        <th>View</th>
                                        <th>Danh mục</th>
                                        <th>Thao Tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $new)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $new->title }}</td>
                                            <td>
                                                @if ($new->img)
                                                    <img src="{{ asset('storage/' . $new->img) }}" style="width: 100px;"
                                                        alt=""
                                                        onerror="this.onerror=null; this.src='https://cdn.pixabay.com/photo/2023/08/18/15/02/cat-8198720_1280.jpg' ">
                                                @endif

                                            </td>
                                            <td>{{ $new->view }}</td>
                                            <td>{{ $new->category->name }}</td>

                                            <td>
                                                <a href="{{ route('news.show', $new) }}">
                                                    <button class="btn btn-success"><i class="far fa-eye"></i></button>
                                                </a>

                                                <a href="{{ route('news.edit', $new) }}">
                                                    <button class="btn btn-warning"><i class="fas fa-cogs"></i></button>
                                                </a>

                                                <a href="#" onclick="return confirm('Bạn có chắc chắn xóa không ? ')">
                                                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                                </a>

                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên tiêu đề</th>
                                        <th>Ảnh tin tức</th>

                                        <th>View</th>
                                        <th>Danh mục</th>
                                        <th>Thao Tác</th>
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
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
