<?php

namespace App\Http\Controllers\Client;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = DB::table('news')->orderBy('id', 'desc')->get();
        $categories = DB::table('categories')->get(); // Lấy tất cả danh mục
        $latestNews = DB::table('news')->orderBy('id', 'desc')->first(); // Lấy bài viết mới nhất (có id lớn nhất)
        $mostViewedNews = DB::table('news')->orderBy('view', 'desc')->take(6)->get();
        $mostViewedNews1 = DB::table('news')->orderBy('view', 'desc')->take(1)->get();

        return view('client.index', [
            'news' => $news,
            'categories' => $categories,
            'latestNews' => $latestNews,
            'mostViewedNews' => $mostViewedNews ,
            'mostViewedNews1'=> $mostViewedNews1
            // Truyền dữ liệu bài viết có lượt view cao nhất
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $categories = DB::table('categories')->get();

        return view('client.show', compact('news', 'categories'));
    }

    



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }

   
}
