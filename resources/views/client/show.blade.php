@extends('client.layouts.master')


@section('content')
    <!-- Single Product Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                <li class="breadcrumb-item active text-dark">{{ $news->title }}</li>

            </ol>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <a class="h1 display-5">{{ $news->title }}</a>
                    </div>
                    <p class="my-5" style="font-size: larger">{{ $news->content }}
                    </p>
                    <div class="row g-4">

                        <div class="col-11">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('storage/' . $news->img) }}" class="img-zoomin img-fluid rounded w-90" width="100%"
                                    height="" alt="">
                            </div>
                            <p class="my-5">Photo by : Gia Duc</p>
                        </div>
                    </div>

                    <p class="my-7" style="font-size: larger">{{ $news->content2 }}
                    </p>

                    
                    
                    <div class="bg-light rounded p-4">
                        <h4 class="mb-4">Bình luận</h4>
                        @if($news->comments->isNotEmpty())
                            @foreach($news->comments as $comment)
                                <div class="p-4 bg-white rounded mb-0">
                                    <div class="row g-4">
                                        <div class="col-3">
                                            <img src="{{ asset('storage/news/cr7.webp') }}" class="img-fluid rounded-circle w-100" alt="">
                                        </div>
                                        <div class="col-9">
                                            <div class="d-flex justify-content-between">
                                                <h5>{{ $comment->user->name }}</h5>
                                                <small class="text-body d-block mb-3">{{ $comment->created_at->format('d M, Y') }}</small>
                                            </div>
                                            <p class="mb-0">{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Chưa có bình luận nào cho bài viết này.</p>
                        @endif
                    </div>
                    
                    
                    <div class="bg-light rounded p-4 my-4">
                        <h4 class="mb-4">Leave A Comment</h4>
                    
                        @if(auth()->check())
                            <form action="{{ route('comments.store', $news->id) }}" method="POST">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-12">
                                        <textarea class="form-control" name="content" id="" cols="30" rows="7" placeholder="Viết bình luận của bạn ở đây"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="form-control btn btn-primary py-3" type="submit">Gửi bình luận</button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <div class="alert alert-warning" role="alert">
                                Bạn cần <a href="{{ route('login') }}">đăng nhập</a> để có thể bình luận.
                            </div>
                        @endif
                    </div>
                    
                    




                </div>
                
                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <div class="input-group w-100 mx-auto d-flex mb-4">
                                    <input type="search" class="form-control p-3" placeholder="keywords"
                                        aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i
                                            class="fa fa-search text-white"></i></span>
                                </div>
                                <h4 class="mb-4">Danh mục phổ biến</h4>
                                <div class="row g-2">
                                    @foreach ($categories as $category)
                                        <a href="{{ route('categories.show', $category->id) }}"
                                            class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">{{ $category->name }}</a>
                                    @endforeach
                                    
                                </div>
                                <h4 class="my-4">Stay Connected</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a href="#"
                                            class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">13,977 Fans</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">21,798 Follower</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">7,999 Subscriber</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">19,764 Follower</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                            <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">31,999 Subscriber</span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                            <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">37,999 Subscriber</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('client.index') }}">Quay lại danh sách</a>

            </div>


        </div>
    </div>
    <!-- Single Product End -->
@endsection
