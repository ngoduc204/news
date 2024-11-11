@extends('admin.layouts.master')

@section('content')
    
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sửa danh mục</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form </h3>
                            </div>

                            <form action="<?= route('categories.update', $category) ?>" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="text" name="id" value="{{ $category->name }}" hidden>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên danh mục</label>
                                        <input type="text" class="form-control" value="{{ $category->name }}"
                                            name="name" placeholder="Mời nhập tên danh mục">

                                    </div>



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
            
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
