<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductCategoryController extends Controller {
    public function index(Request $request)
    {
        return view('admin.product.category.index', []);
    }
}