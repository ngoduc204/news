{{-- @extends('client.layouts.master')

@section('content')
<h1>Kết quả tìm kiếm cho: "{{ $keyword }}"</h1>

@if($news->isEmpty())
    <p>Không có kết quả nào phù hợp với tìm kiếm của bạn.</p>
@else
    <ul>
        @foreach($news as $item)
            <li><a href="{{ route('client.show', $item->id) }}">{{ $item->title }}</a></li>
        @endforeach
    </ul>
@endif
@endsection --}}
