<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Server;

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
    public function show($slug)
    {
        $parents = $this->tree;
        $category = Category::where('slug', $slug)->get();
        $serverCategories = Category::where('parent_id',$category[0]->id)->with('ancestorsAndSelf')->with('servers')->get();

        return view('marketplace.categories.show', [
            'parents' => $parents,
            'category' => $category[0],
            'serverCategories' => $serverCategories
        ]);
    }

    public function subCategory($categorySlug, $subCategorySlug)
    {

        $parents = $this->tree;
        $serverCategories = Category::where('slug', $subCategorySlug)->with('siblingsAndSelf')->with('servers')->get();

        return view('marketplace.categories.sub_categories', [
            'parents' => $parents,
            'serverCategories' => $serverCategories
        ]);
    }
}
