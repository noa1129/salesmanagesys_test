<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsEditController extends Controller
{
    public function create()
    {

        return view('products.edit');
    }
}
