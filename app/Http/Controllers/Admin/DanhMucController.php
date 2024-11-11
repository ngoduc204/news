<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public $categories;
    // public function __construct()
    // {
    //     $this->danh_mucs = new DanhMuc();
    // }

    const PATH_VIEW = 'admin.categories.';
    public function index()
    {
        $data = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([  
            'name' => 'required|max:255',  
        ]);
        try {
            Category::query()->create($data);
            return redirect()->route('categories.index')->with('success', true);
        } catch (\Throwable $th) {
            return back()->with('success',false)->with('error',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view(self::PATH_VIEW . __FUNCTION__,compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([  
            'name' => 'required|max:255',  
        ]);
        try {
            $category->update($data);
            return redirect()->route('categories.index')->with('success', true);
        } catch (\Throwable $th) {
            return back()->with('success',false)->with('error',$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return back()->with('success', true);
        } catch (\Throwable $th) {
            return back()
                ->with('success', false)
                ->with('error', $th->getMessage());
        }
    }

    
}
