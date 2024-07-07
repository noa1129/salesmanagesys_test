<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsDetailController extends Controller
{
    public function create()
    {
        return view('products.detail');
    }
}
