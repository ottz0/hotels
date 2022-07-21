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

        //Main Menu - Root Categories Null
        $rootCategories = $this->tree;

        //Get the parent categories
        $parentCategorySlug = Category::where('slug', $slug)->get();
        $parentCategories = Category::where('parent_id',$parentCategorySlug[0]->id)->with('parentAndSelf')->get();
        $serverLists = Category::where('parent_id',$parentCategorySlug[0]->id)->with('parentAndSelf')->with('servers')->get();

        return view('marketplace.categories.show', [
            'rootCategories' => $rootCategories, //where parent_id is null
            'parent' => $parentCategorySlug[0], //the parent that is selected
            'parentCategories' => $parentCategories, //value, gpu, blaze etc
            'serverLists' => $serverLists, //the servers
        ]);
    }

    public function subCategory($categorySlug, $subCategorySlug)
    {

        //Main Menu - All of the parents
        $rootCategories = $this->tree;



        //Get the selected category and show all the servers in that category
        //$subCategories = Category::where('parent_id',$category[0]->id)->with('parentAndSelf')->with('servers')->get();

        //Get the parent slug and find the id
        $parentCategorySlug = Category::where('slug', $categorySlug)->get();
        $parentCategories = Category::where('parent_id',$parentCategorySlug[0]->id)->with('parentAndSelf')->get();
        $serverLists = Category::where('slug', $subCategorySlug)->with('parentAndSelf')->with('servers')->get();


        return view('marketplace.categories.sub_categories', [
            'rootCategories' => $rootCategories,
            'parent' => $serverLists[0], //the parent that is selected
            'parentCategories' => $parentCategories,
            'serverLists'=> $serverLists
        ]);
    }
}
