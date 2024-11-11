@extends('admin.layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm Sản phẩm</h1>
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

                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên tiêu đề</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        placeholder="Mời nhập tên tiêu đề">
                                </div>

                                <div class="form-group">
                                    <label>Ảnh tin tức</label>
                                    <input type="file" class="form-control" name="img">
                                </div>

                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea type="text" class="form-control" name="content" value="{{ old('content') }}"
                                        placeholder="Mời nhập nội dung bài viết"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Nội dung2</label>
                                    <textarea type="text" class="form-control" name="content2" value="{{ old('content2') }}"
                                        placeholder="Mời nhập nội dung bài viết"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Danh mục tin tức</label>
                                    <select class="form-control" name="id_categories" value="{{ old('id_categories') }}">
                                        <option value="">Chọn danh mục</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('id_categorie') == $category->id ? 'selected' : '' }}>
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
