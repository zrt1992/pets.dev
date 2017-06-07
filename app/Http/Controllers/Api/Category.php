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
        $categories = \App\Category::with('children')->get();
        return response()->json($categories, 200);
    }
}
