<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.allproducts');
    }

    public function addproduct()
    {
        return view('admin.product.addproduct');
    }
}
