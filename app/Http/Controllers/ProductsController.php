<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|name',
            'status' => 'boolean',
        ]);
    }
}
