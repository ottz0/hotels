<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHotel;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelFacility;
use Illuminate\Support\Facades\DB;


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
    public function store(StoreHotel $request)
    {
        // Dump the request
        //dd($request);


        //Basic Store Method
        // $hotel = new Hotel();
        // $hotel->name = $request->input('name');
        // $hotel->address = $request->input('address');
        // $hotel->postcode = $request->input('postcode');
        // $hotel->state = $request->input('state');
        // $hotel->star_rating = $request->input('star_rating');
        //$hotel->save();

        // $facility = new HotelFacility();
        // $facility->fitness_centre = true;
        // $facility->bar = true;
        // $facility->swimming_pool = false;
        // $facility->parking = true;
        // $facility->free_wifi = true;
        //$facility->save();

        //Mass Assignment
        // $hotel = new Hotel(request()->all());
        // $hotel->save();
        // $request->session()->flash('status', 'The Hotel was created');
        // return redirect()->route('hotels.show', ['hotel' => $hotel->id]);


        // DB::transaction(function () use ($request) {
        //     $hotel = Hotel::create([
        //         'name' => $request->input('name'),
        //         'address' => $request->input('address'),
        //         'postcode' => $request->input('postcode'),
        //         'state' => $request->input('state'),
        //         'star_rating' => $request->input('star_rating'),
        //     ]);

        //     $facility = HotelFacility::create([
        //         'hotel_id' => 39,
        //         'fitness_centre' => true,
        //         'bar' => false,
        //         'bar' => true,
        //         'parking' => true,
        //         'free_wifi' => true,
        //         'swimming_pool' => true,
        //     ]);
        //     Hotel::find($hotel->id)->facility()->save($facility);
        // });

        //return redirect()->back();

        DB::beginTransaction();
        try {
            $hotel = Hotel::create([
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'postcode' => $request->input('postcode'),
                'state' => $request->input('state'),
                'star_rating' => $request->input('star_rating'),
            ]);

            HotelFacility::create([
                'hotel_id' => $hotel->id,
                'fitness_centre' => $request->has('fitness_centre') ? 1 : 0,
                'bar' => $request->has('bar') ? 1 : 0,
                'parking' => $request->has('parking') ? 1 : 0,
                'free_wifi' => $request->has('free_wifi') ? 1 : 0,
                'swimming_pool' => $request->has('swimming_pool') ? 1 : 0
            ]);

            DB::commit();

        }catch (Exception $ex) {

            DB::rollBack();

        }
        $request->session()->flash('status', 'A new hotel record was created');
        return redirect()->back();

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
            'hotel' => Hotel::with('hotelFacilities', 'hotelReviews')->findOrFail($id)
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

        //$hotel = Hotel::with('hotelFacilities')->where('id', $id)->get();

        //return view('hotels.edit', ['hotel' => $this->$hotel]);

        return view('hotels.edit', [
            'hotel' => Hotel::with('hotelFacilities')->where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreHotel $request, $id)
    {
        $hotel = Hotel::with('hotelFacilities')->findOrFail($id);
        $hotel->name = $request->input('name');
        $hotel->address = $request->input('address');
        $hotel->postcode = $request->input('postcode');
        $hotel->state = $request->input('state');
        $hotel->star_rating = $request->input('star_rating');

        //Save the hotel first
        $hotel->save();

        // Now update the relation - the method in within the relation (hotelFacilities)
        $hotel->hotelFacilities->update([
            'hotel_id' => $hotel->id,
            'fitness_centre' => $request->has('fitness_centre') ? 1 : 0,
            'bar' => $request->has('bar') ? 1 : 0,
            'parking' => $request->has('parking') ? 1 : 0,
            'free_wifi' => $request->has('free_wifi') ? 1 : 0,
            'swimming_pool' => $request->has('swimming_pool') ? 1 : 0
        ]);

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
        $hotel = Hotel::findOrFail($id);

        $hotel->hotelFacilities()->delete();

        $hotel->delete();


        session()->flash('status', 'The hotel was deleted');

        return redirect()->route('hotels.index');
    }
}
