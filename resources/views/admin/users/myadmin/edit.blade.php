@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Chỉnh sửa thông tin tài khoản</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('success') && session()->get('success'))
                <div class="alert alert-success">
                    Thao tác thành công
                </div>
            @endif

    <form action="{{ route('admin.users.myadmin.update') }}" method="POST">
        @csrf
        @method('PUT') <!-- Phương thức PUT cho cập nhật -->

        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Mật khẩu (Để trống nếu không muốn thay đổi)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Nhập lại mật khẩu</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
    </form>
</div>
@endsection