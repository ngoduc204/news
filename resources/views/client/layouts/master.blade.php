<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ducngph46559_ASM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('client.layouts.partials.css')
    <style>
        .news-img {
            max-height: 280px;
            /* Giới hạn chiều cao tối đa của ảnh */
            object-fit: cover;
            /* Giúp ảnh giữ tỉ lệ và không bị méo */
        }
    </style>
</head>

<body>

    <!-- Navbar start -->
    @include('client.layouts.partials.header-nav', ['categories' => $categories])
    {{-- ['categories' => $categories] --}}
    <!-- Navbar End -->

    {{-- <!-- Banner Start -->
        @include('client.layouts.partials.banner')
        <!-- Banner End --> --}}


    <!-- Latest News Start -->
    @yield('content')
    <!-- Latest News End -->


    <!-- Copyright Start -->
    @include('client.layouts.partials.footer')
    <!-- Copyright End -->

    @include('client.layouts.partials.js')
</body>

</html>
