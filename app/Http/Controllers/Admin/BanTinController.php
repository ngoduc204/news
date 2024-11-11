<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BanTinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.news.';
    public function index()
    {
    $data = News::with('category')->get();
    return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'img' => 'required|image|max:4096',
            'content' => 'required|min:10',
            'content2' => 'required|min:10',
            'id_categories' => 'required',
        ]);

        try {
            if ($request->hasFile('img')) {
                $data['img'] = Storage::put('news', $request->file('img'));
            }
            News::query()->create($data);
            return redirect()->route('news.index')->with('success',true);
        } catch (\Throwable $th) {
            if (!empty($data['img']) && Storage::exists($data['img'])) {
                Storage::delete($data['img']);
            }

            return back()

                ->with('success', false)
                ->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view(self::PATH_VIEW . __FUNCTION__,compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'img' => 'required|image|max:4096',
            'content' => 'required|min:10',
            'content2' => 'required|min:10',
            'id_categories' => 'required',
        ]);
        try {
            if($request->hasFile('img')){
                $data['img'] = Storage::put('news',$request->file('img'));
            }
            $currentImg = $news->img;
            $news->update($data);

            if($request->hasFile('img') && !empty($currentImg) && Storage::exists($currentImg)){
                Storage::delete($currentImg);
            }
            return back()->with('success', true);
        } catch (\Throwable $th) {
            if (!empty($data['img']) && Storage::exists($data['img'])) {
                Storage::delete($data['img']);
            }

            return back()

                ->with('success', false)
                ->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
