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
        //dd($request);

        $hotel = new Hotel();
        $hotel->name = $request->input('name');
        $hotel->address = $request->input('address');
        $hotel->postcode = $request->input('postcode');
        $hotel->state = $request->input('state');
        $hotel->star_rating = $request->input('star_rating');

        $hotel->save();

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
        // Hotel::insert([
        //     'name' => $request->name,
        //     'address' => $request->address
        // ]);


        // $hotel = Hotel::updateOrCreate(
        //     ['name' => $request('email')],
        //     ['address' => $request('address')],
        //     ['postcode' => $request('postcode')],
        //     ['state' => $request('state')],
        //     ['star_rating' => $request('star_rating')]
        // );

        $hotel = [
            ['name' => $request('email')],
            ['address' => $request('address')],
            ['postcode' => $request('postcode')],
            ['state' => $request('state')],
            ['star_rating' => $request('star_rating')]
        ];


        $post = Hotel::findOrFail($id);
        //$validated = $request->validated();
        $post->fill($hotel);
        $post->save();



        //print_r($hotel);die;

        // $hotel->save();



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
