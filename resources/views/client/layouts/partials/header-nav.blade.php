<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-dark d-none d-lg-block">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <div class="top-info flex-grow-0">
                    <span class="rounded-circle btn-sm-square bg-primary me-2">
                        <i class="fas fa-bolt text-white"></i>
                    </span>
                    <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                        <p class="mb-0 text-white fs-6 fw-normal">Tin mới</p>
                    </div>
                    <div class="overflow-hidden" style="width: 735px;">
                        <div id="note" class="ps-2">
                            <img src="/news/img/features-fashion.jpg"
                                class="img-fluid rounded-circle border border-3 border-primary me-2"
                                style="width: 30px; height: 30px;" alt="">
                            <a href="#">
                                @if (Auth::check())
                                    <p class="text-white mb-0 link-hover">
                                        <strong>Xin chào, {{ Auth::user()->name }}</strong> hãy đọc những tin tức mới
                                        nhất được cập nhật tại news.
                                    </p>
                                @else
                                    <p class="text-white mb-0 link-hover">
                                        <strong>Xin chào khách!</strong> Đăng nhập để xem những tin tức mới nhất tại
                                        news.
                                    </p>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="index.html" class="navbar-brand mt-3">
                    <p class="text-primary display-6 mb-2" style="line-height: 0;">Tin tức</p>
                    <small class="text-body fw-normal" style="letter-spacing: 12px;">Báo mới</small>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="/" class="nav-item nav-link active">Trang chủ</a>
                        @foreach ($categories as $category)
                            <a href="{{ route('categories.show', $category->id) }}"
                                class="nav-item nav-link">{{ $category->name }}</a>
                        @endforeach

                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Danh mục tin
                                tức</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                @foreach ($categories as $category)
                                    <a href="{{ route('categories.show', $category->id) }}"
                                        class="dropdown-item">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div> --}}
                        @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tài khoản
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <!-- Tài khoản của bạn (dành cho user) -->
                                    @if (Auth::user()->type !== 'admin')
                                        <li><a href="{{route('user.edit')}}" class="dropdown-item">Tài khoản của
                                                bạn</a></li>
                                    @endif

                                    <!-- Hiển thị nếu là admin -->
                                    @if (Auth::user()->type === 'admin')
                                        <li><a href="{{ route('admin.dashboard') }}" class="dropdown-item">Đăng nhập
                                                Admin</a></li>
                                    @endif

                                    <!-- Đăng xuất -->
                                    <li>
                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>
                                    </li>
                                </ul>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-item nav-link">Đăng nhập</a>
                            </li>
                        @endif


                    </div>
                    <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                        {{-- <form action="{{ route('news.search') }}" method="GET" class="w-100"> --}}
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm tin tức..."
                                required>
                            <button style="color: whitesmoke" class="btn btn-primary" type="submit">Tìm kiếm</button>
                        </div>
                        {{-- </form> --}}
                    </div>


                </div>
            </nav>
        </div>
    </div>
</div>
