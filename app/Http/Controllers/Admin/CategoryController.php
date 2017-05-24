<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $category;

    public function __construct()
    {
        $this->category = new \App\Category;
    }

    public function showAddCategoryForm()
    {
        return view('vendor.voyager.categories.add');
    }

    public function showEditCategoryForm($id = 0)
    {
        $category = $this->category->findOrFail($id);
        $data['category'] = $category->toArray();
        // dd($data['category']);
        return view('vendor.voyager.categories.edit', $data);
    }

    public function postAddCategory(Request $request, $categoryid = 0)
    {
        //dd($request->all());

        $category = [
            'name' => $request->name,
            'slug' => slugify($request->name)
        ];
        if ($request->hasFile('image')) {
            $files = uploadInputs($request->image, 'category_images');
            $category['image'] = $files;
        }
        $z = $this->category->updateOrCreate(['id' => $categoryid], $category);
        if ($categoryid == 0) {
            $categoryid = $z->id;
            return redirect()->route('posteditCategory', ['id' => $categoryid])->with('message', 'Category Add Sucessful!');

        }
        return redirect()->route('posteditCategory', ['id' => $categoryid])->with('message', 'Category Edit Sucessful!');


    }
}
