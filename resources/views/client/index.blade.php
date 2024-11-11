@extends('client.layouts.master')

@section('content')
<!-- Main Post Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-7 col-xl-8 mt-0">
    <div class="position-relative overflow-hidden rounded mb-4">
        <img src="{{ asset('storage/' . $latestNews->img) }}" class="img-fluid rounded img-zoomin w-100" alt="{{ $latestNews->title }}" style="max-height: 400px; object-fit: cover;">

        <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
            <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> {{ \Carbon\Carbon::parse($latestNews->created_at)->diffInMinutes(now()) }} minute read</a>
            <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
            <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comments</a>
            <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Shares</a>
        </div>
    </div>
    <div class="border-bottom py-3">
        <a href="{{ route('client.show', $latestNews->id) }}" class="display-6 text-dark mb-0 link-hover" style="font-size: 1.5rem;">{{ $latestNews->title }}</a>

    </div>
    <p class="mt-3 mb-4">{{ Str::limit($latestNews->content, 150) }}</p>
    <div class="bg-light p-4 rounded">
        <div class="news-2">
            <h3 class="mb-4">Tin tức đáng chú ý</h3>
        </div>
        @foreach ($mostViewedNews1 as $top1)
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <div class="rounded overflow-hidden">
                    <img src="{{ asset('storage/' . $top1->img) }}" class="img-fluid rounded img-zoomin" alt="" style="width: 80%; height: auto;">
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column">
                    <a href="{{ route('client.show', $top1->id) }}" class="h3">{{$top1->title}}</a>
                    <p class="mb-0 fs-5"><i class="fa fa-clock">{{ \Carbon\Carbon::parse($top1->created_at)->format('d/m/Y') }}</i></p>
                    <p class="mb-0 fs-5"><i class="fa fa-eye"> {{ $top1->view }} Views</i></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

            <div class="col-lg-5 col-xl-4">
               <div class="bg-light rounded p-4 pt-0">
                <div class="row g-4">
                    <div class="col-12">
                        <h3 class="mb-4">Bài viết có lượt xem nhiều nhất</h3>
                    </div>
                    @foreach ($mostViewedNews as $newsItem)
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{ asset('storage/' . $newsItem->img) }}" class="img-zoomin img-fluid rounded w-100" alt="{{ $newsItem->title }}">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="{{ route('client.show', $newsItem->id) }}" class="h6">{{ $newsItem->title }}</a>
                                        <small><i class="fa fa-clock">Ngày đăng : {{ \Carbon\Carbon::parse($newsItem->created_at)->format('d/m/Y') }} </i></small>
                                        <small><i class="fa fa-eye"> {{ $newsItem->view }} Views</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
               </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Post Section End -->
    <div class="container-fluid py-5 my-5"
        style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h1 class="mb-4 text-primary">Báo mới</h1>
                    <h1 class="mb-4">Cập nhật liên tục hàng ngày</h1>
                    <p class="text-dark mb-4 pb-2">"Chào mừng bạn đến với trang tin tức tổng hợp, nơi cung cấp những thông
                        tin nóng hổi, cập nhật nhanh chóng về các sự kiện trong nước và quốc tế. Với đội ngũ biên tập viên
                        chuyên nghiệp, chúng tôi cam kết mang đến cho bạn những tin tức chính xác và toàn diện nhất. Hãy
                        theo dõi chúng tôi để không bỏ lỡ bất kỳ tin tức quan trọng nào!
                    </p>

                </div>
                <div class="col-lg-5">
                    <div class="rounded">
                        <img src="/news/img/banner-img.jpg" class="img-fluid rounded w-100 rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid latest-news py-5">
        <div class="container py-5">
            <h2 class="mb-4">Tin tức mới nhất</h2>
            <div class="latest-news-carousel owl-carousel">
                @if ($news->isEmpty())
                    <p>Không có tin tức nào.</p>
                @else
                    @foreach ($news as $n)
                        <div class="latest-news-item">
                            <div class="bg-light rounded">
                                <div class="rounded-top overflow-hidden">
                                    <img src="{{ asset('storage/' . $n->img) }}" class="img-zoomin img-fluid rounded-top w-100 news-img"
                                        alt="{{ $n->title }}">
                                </div>
                                <div class="d-flex flex-column p-4">
                                    <a href="{{ route('client.show', $n->id) }}" class="h4">{{ $n->title }}</a>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="small text-body link-hover">by Duck</a>
                                        <small class="text-body d-block">
                                            <i class="fas fa-calendar-alt me-1"></i>
                                            {{ $n->created_at }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Section for All Posts Start -->
<!-- Section for All Posts and Ads Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <!-- Phần hiển thị các bài viết trong cột 8 -->
            <div class="col-lg-8">
                <h2 class="mb-4">Tất cả bài viết</h2>
                @foreach ($news as $post)
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center border rounded p-3">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('storage/' . $post->img) }}" class="img-fluid rounded" alt="{{ $post->title }}" style="width: 150px; height: 100px; object-fit: cover;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1"><a href="{{ route('client.show', $post->id) }}" class="text-dark">{{ $post->title }}</a></h5>
                                <p class="mb-1"><small><i class="fa fa-calendar-alt me-1"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</small></p>
                                <p class="mb-0">{{ Str::limit($post->content, 100) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>

            <!-- Phần quảng cáo trong cột 4 -->
            <div class="col-lg-4">
                
                <div class="mb-4">
                    <img src="{{ asset('storage/news/coca.jpg') }}" class="img-fluid rounded" alt="Quảng cáo 1" style="width: 100%;">
                </div>
                <div class="mb-4">
                    <img src="{{ asset('storage/news/run.webp') }}" class="img-fluid rounded" alt="Quảng cáo 2" style="width: 100%;">
                </div>
                <!-- Bạn có thể thêm nhiều quảng cáo tùy ý -->
            </div>
        </div>
    </div>
</div>
<!-- Section for All Posts and Ads End -->



    </div>
@endsection
