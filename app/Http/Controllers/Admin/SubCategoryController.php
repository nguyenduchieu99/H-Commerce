<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.subcategory.allsubcategory');
    }

    public function addsubcategory()
    {
        $categories = Category::latest()->get();
        return view('admin.subcategory.addsubcategory',compact('categories'));
    }

    public function StoreSubCategory(Request $request)
    {   
        // $request->validate([
        //     'subcategory_name'=> 'request|unique:subcategories',
        //     'category_id'=>'required'
        // ]);

        // $category_id = $request->category_id;

        // $category_name = Category::where('id',$category_id)->value('cateogory_name');

        
    }
}
