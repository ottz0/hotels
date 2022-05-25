<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotels.index', ['hotels' => Hotel::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Dump the request
        //dd($request);

        //Basic validate
        $request->validate([
            'state' => 'bail|required|max:3'
        ]);


        //Basic Store Method
        // $hotel = new Hotel();
        // $hotel->name = $request->input('name');
        // $hotel->address = $request->input('address');
        // $hotel->postcode = $request->input('postcode');
        // $hotel->state = $request->input('state');
        // $hotel->star_rating = $request->input('star_rating');
        // $hotel->save();

        //Mass Assignment
        $hotel = new Hotel(request()->all());
        $hotel->save();

        $request->session()->flash('status', 'The Hotel was created');

        return redirect()->route('hotels.show', ['hotel' => $hotel->id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('hotels.show', [
            'hotel' => Hotel::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('hotels.edit', ['hotel' => Hotel::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'state' => 'bail|required|max:3'
        ]);


        // $hotel = Hotel::findOrFail($id);
        // $hotel->name = $request->input('name');
        // $hotel->address = $request->input('address');
        // $hotel->postcode = $request->input('postcode');
        // $hotel->state = $request->input('state');
        // $hotel->star_rating = $request->input('star_rating');
        // $hotel->save();


        Hotel::updateOrCreate(
        [
            // this first array is used to check if these fields/values exist in the db
            // if this record exists, it will update with the 2nd array below
            // if it doesn't exist, it will create new record with 2nd array below
            'id' => $id
        ],
        [
            // actual data to either insert or update
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'postcode' => $request->input('postcode'),
            'state' => $request->input('state'),
            'star_rating' => $request->input('star_rating'),
        ]);

        //dd($id);




        //$post = Hotel::findOrFail($id);
        //$validated = $request->validated();
        //$post->fill($hotel);
        //$post->save();


        $request->session()->flash('status', 'The Hotel was updated');

        return redirect()->route('hotels.show', ['hotel' => $id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
