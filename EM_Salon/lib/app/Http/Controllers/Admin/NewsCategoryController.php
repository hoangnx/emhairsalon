<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsCategory;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::all();
        return view('admin/newsCategory',compact('categories'));
    }

    public function store(NewsCategory $category)
    {
        request()->validate([
            'name'=>'required|unique:categories,name'
        ]);
        
        $category->name = request('name');
        $category->save();
        return back()
        ->with('create_success', 'Bạn đã tạo thành công!');
    }



    public function edit(NewsCategory $categories)
    {
        return view('admin/news-categories',compact('categories'));
    }


    
    public function update(NewsCategory $categories)
    {
        $categories->update(request(['name']));
        return back()->with('create_success', 'Bạn đã sửa thành công!');
    }

    
    public function destroy($id)
    {
            $category = NewsCategory::find($id);
            $category->delete();
            return back()->with('create_success', 'Bạn đã xóa thành công!');
    }
}
