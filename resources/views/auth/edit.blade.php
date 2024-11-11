<!-- resources/views/auth/edit.blade.php -->
@extends('layout.auth')

@section('content')
    <div class="container">
        <h2>Cập nhật thông tin tài khoản</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('user.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Họ và tên -->
            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}"
                    required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}"
                    required>
            </div>

            <!-- Mật khẩu hiện tại -->
            <div class="mb-3">
                <label for="current_password" class="form-label">Mật khẩu hiện tại</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required>
            </div>

            <!-- Mật khẩu mới -->
            <div class="mb-3">
                <label for="new_password" class="form-label">Mật khẩu mới</label>
                <input type="password" class="form-control" id="new_password" name="new_password">
            </div>

            <!-- Xác nhận mật khẩu mới -->
            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Xác nhận mật khẩu mới</label>
                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
            </div>

            <!-- Nút lưu thay đổi -->
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
        <a href="{{ route('client.index') }}" class="btn btn-success mt-3">Quay lại trang chủ</a>
    </div>
@endsection
