<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return "heelo";
    }

    public function listProduct()
    {
        return 2;
    }

    public function getProduct($id = 0)
    {
        return 3;
    }

    public function formUpdate(Request $request)
    {
        return "123";
    }
}
