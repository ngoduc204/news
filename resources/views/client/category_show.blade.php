@extends('client.layouts.master')

@section('content')
    <div class="container-fluid latest-news py-5">
        <div class="container py-5">
            <h2 class="mb-5">Tin tức > {{ $category->name }}</h2>

            <div class="container py-4">
                <div class="row">
                    @if ($news->isEmpty())
                        <div class="col-12">
                            <p>Không có tin tức nào trong danh mục này.</p>
                        </div>
                    @else
                        @foreach ($news as $n)
                            <div class="col-md-4 mb-4">
                                <div class="latest-news-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="{{ asset('storage/' . $n->img) }}" alt="{{ $n->title }}" class="img-fluid w-100 news-img">
                                        </div>
                                        <div class="d-flex flex-column p-4">
                                            <a href="{{ route('client.show', $n->id) }}" class="h4">{{ $n->title }}</a>
                                            <div class="d-flex justify-content-between mt-2">
                                                <a href="#" class="small text-body link-hover">by Duck</a>
                                                <small class="text-body d-block">
                                                    <i class="fas fa-calendar-alt me-1"></i>
                                                    {{ $n->created_at }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            
            
        </div>
    </div>
@endsection
