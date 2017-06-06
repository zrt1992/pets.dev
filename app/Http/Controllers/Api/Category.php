<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Category extends Controller
{
    /**
     * Show all categories
     * @return \Illuminate\Http\JsonRespons
     */
    public function index()
    {
        $categories = \App\Category::all()->toArray();
        $categoriesRes = [];
        return response()->json($categories);
    }
}
