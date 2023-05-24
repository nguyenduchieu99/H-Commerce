<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =  Category::latest()->get();
        return view('admin.category.allcategory',compact('categories'));
    }

    public function addcategory()
    {
        return view('admin.category.addcategory');
    }

    public function storecategory(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories'
        ]);

        Category::insert([
            'category_name' =>$request->category_name,
            'slug'=>strtolower(str_replace(' ','-',$request->category_name))
        ]);

        return redirect()->route('allcategory')->with('message','Category Addded Successfully!!!');
    }

    public function EditCategory($id)
    {
        $category_info = Category::findOrFail($id);
        
        return view('admin.category.editcategory',compact('category_info'));
    }

    public function UpdateCategory(Request $request)
    {
        $category_id = $request->category_id;

        $request->validate([
            'category_name'=>'required|unique:categories'
        ]);

        Category::findOrFail($category_id)->update([
            'category_name' =>$request->category_name,
            'slug'=>strtolower(str_replace(' ','-',$request->category_name))
        ]);

        return redirect()->route('allcategory')->with('message','Category Update Successfully!!!');
    }

    public function DeleteCategory($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('allcategory')->with('message','Category Delete Successfully');
    }
}
