<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Server;
use Request;

class ServerController extends Controller
{
    public function __construct()
    {
        $this->tree = Category::tree()->get()->toTree();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function show($rootSlug, $parentCategorySlug, $serverSlug)
    {

         //Main Menu - Root Categories Null
         $rootCategories = $this->tree;

         //$parentCategorySlug = Category::where('slug', $slug)->get();
         //$parentCategories = Category::where('parent_id',$parentCategorySlug[0]->id)->with('parentAndSelf')->get();
         //$serverLists = Category::where('parent_id',$parentCategorySlug[0]->id)->with('parentAndSelf')->with('servers')->get();

         //$cc = Request::segment(2);
         //$category = Category::where('slug', $parentCategorySlug)->get();

         //dd($rootSlug);

         $rootCategory = Category::where('slug', $rootSlug)->get();
         $category = Category::where('slug', $parentCategorySlug)->get();
         $subCategory = Category::where('slug', $serverSlug)->get();


         //RootCategory
        $server = Server::where('slug', $serverSlug)->get();


        //$parentCategories = Category::where('parent_id', 1)->get();

        //dd($parentCategorySlug);



        return view('marketplace.servers.show', [
            'rootCategories' => $rootCategories, //where parent_id is null
            'rootCategory' => $rootCategory[0],
            'category' => $category[0],
            'subCategory' => $subCategory,
            'parent' => $parentCategorySlug[0], //the parent that is selected
            'category' => $category,
            //'parentCategories' => $parentCategories, //the single parent
            'server'=> $server[0] //the servers
        ]);
    }

}
