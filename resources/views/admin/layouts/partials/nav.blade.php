<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('client.index') }}" class="nav-link">Website</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>

        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf

                {{-- <button type="submit"  class="btn btn-danger mt-4">Logout</button> --}}

                <button type="submit" class="nav-link" >
                    <a onclick="return confirm('Đăng xuất tài khoản')">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </button>
            </form>
        </li>
    </ul>
</nav>
