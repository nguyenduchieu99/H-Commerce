<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.subcategory.allsubcategory');
    }

    public function addsubcategory()
    {
        return view('admin.subcategory.addsubcategory');
    }
}
