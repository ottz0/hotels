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


        //dd($parentCategories);

        return view('marketplace.categories.show', [
            'rootCategories' => $rootCategories,
            'parentCategories' => $parentCategories,
            'serverLists' => $serverLists,
            //'theCategory' => $serverCategories[0]->parentAndSelf[0],

            //'serverCategories' => $serverCategories[0]
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

        //$servers = Category::where('id',$subCategorySlug)->with('servers')->get();

        //$parentCategories = Category::where('parent_id', $parentCategorySlug[0]->id)->get();

        //get the slug then find the id
        //$servers = Category::find(4)->with('servers')->get();


        $serverLists = Category::where('slug', $subCategorySlug)->with('siblingsAndSelf')->with('servers')->get();

        //dd($serverCategories);

        //dd($servers);


        //$subCategories = Category::where('parent_id', $categorySlug)->get();

        // $constraint = function ($query) use ($subCategorySlug){
        //     $query->where('slug', $subCategorySlug);
        // };

        //$tree = Category::treeOf($constraint)->get();



        // rootCategories
        // parentCategories
        // selectedCategories




        //dd($category);


        //Get the selected category, the sub categories and the servers within the sub category
        //$servers = Category::where('slug', $subCategorySlug)->with('ancestorsAndSelf')->with('servers')->get();

        return view('marketplace.categories.sub_categories', [
            'rootCategories' => $rootCategories,
            'parentCategories' => $parentCategories,
            'serverLists'=> $serverLists
        ]);
    }
}
