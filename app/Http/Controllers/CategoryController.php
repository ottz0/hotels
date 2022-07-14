<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->tree = Category::tree()->get()->toTree();
    }

    public function index()
    {
        return view('marketplace.categories.index', [
            'tree' => $this->tree
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('slug', $id)->firstOrFail();
        $category->descendants;

        dd($category);


        // return view('marketplace.categories.show', [
        //     'key' => 'val'
        // ]);
    }

    public function subCategory()
    {
        return view('marketplace.categories.sub_categories', [
            'key' => 'val'
        ]);
    }
}
