<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsCreateController extends Controller
{
    public function create()
    {

        return view('products.create');
    }
}
