@extends('admin.layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi tiết Tin tức</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $news->title }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tiêu đề:</label>
                                <p>{{ $news->title }}</p>
                            </div>

                            <div class="form-group">
                                <label>Ảnh tin tức:</label><br>
                                <img src="{{ asset('storage/' . $news->img) }}" style="width: 300px;" alt=""
                                     onerror="this.onerror=null; this.src='https://cdn.pixabay.com/photo/2023/08/18/15/02/cat-8198720_1280.jpg'">
                            </div>

                            <div class="form-group">
                                <label>Lượt xem:</label>
                                <p>{{ $news->view }}</p>
                            </div>

                            <div class="form-group">
                                <label>Danh mục:</label>
                                <p>{{ $news->category->name }}</p>
                            </div>

                            <div class="form-group">
                                <label>Nội dung:</label>
                                <p>{{ $news->content }}</p>
                            </div>

                            <div class="form-group">
                                <label>Nội dung:</label>
                                <p>{{ $news->content2 }}</p>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('news.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
