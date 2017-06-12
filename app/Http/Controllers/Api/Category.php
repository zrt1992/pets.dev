<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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

    /**
     * Get only parents
     * @return \Illuminate\Http\JsonResponse
     */
    public function getParents()
    {
        $categories = \App\Category::where('parent_id', NULL)->orderBy('name', 'ASC')->get();
        return response()->json($categories, 200);
    }

    public function getChilds($parent_slug)
    {
        $parentSlug = $parent_slug;
        $parentId = \App\Category::where('slug', $parentSlug)->firstOrFail()->id;
        $breeds = \App\Category::where('parent_id', $parentId)->orderBy('name', 'ASC')->get();
        return response()->json($breeds);
    }
}
