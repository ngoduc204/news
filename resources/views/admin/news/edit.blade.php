@extends('admin.layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa bài viết</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">Form </h3>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif

                        <form action="{{ route('news.update', $news) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên tiêu đề</label>
                                    <input type="text" class="form-control" name="title" value="{{ $news->title }}"
                                        placeholder="Mời nhập tên tiêu đề">
                                </div>

                                <div class="form-group">
                                    <label>Ảnh tin tức</label>
                                    <input type="file" class="form-control" name="img">
                                    @if ($news->img)
                                        <img src="{{ asset('storage/' . $news->img) }}" style="width: 100px;" alt=""
                                            onerror="this.onerror=null; this.src='https://cdn.pixabay.com/photo/2023/08/18/15/02/cat-8198720_1280.jpg' ">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" name="content" placeholder="Mời nhập nội dung bài viết">{{ $news->content }}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Nội dung 2</label>
                                    <textarea class="form-control" name="content2" placeholder="Mời nhập nội dung bài viết">{{ $news->content2 }}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Danh mục tin tức</label>
                                    <select class="form-control" name="id_categories">
                                        <option value="">Chọn danh mục</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('id_categories', $news->id_categories) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                




                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
