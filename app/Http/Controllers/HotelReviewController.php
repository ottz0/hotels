<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;

class HotelReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Hotel $hotel)
    {
        return view('reviews.index', [
            'reviews' => Review::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('reviews.create', [
            'hotel' => Hotel::findOrFail($id)
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $hotel_id)
    {
        //dd($hotel_id, $request->date_of_stay, $request->review);

        DB::beginTransaction();
        try {
            Review::create([
                'hotel_id' => $hotel_id,
                'date_of_stay' => $request->date_of_stay,
                'review' => $request->review,
            ]);

            DB::commit();

        }catch (Exception $ex) {

            DB::rollBack();

        }
        $request->session()->flash('status', 'A new review was created');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $review_id)
    {
        $hotel = Hotel::find($id);

        return view('reviews.edit', [
            'hotel' => $hotel,
            'review' => $hotel->hotelReviews()->where('id', $review_id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hotel_id, $review_id)
    {
        //dd($request);
        //$review = Hotel::with('hotelReviews')->findOrFail($hotel_id);

        $review = Review::find($review_id);

        // Now update the relation - the method in within the relation (hotelFacilities)
        $review->update([
            'date_of_stay' => $request->date_of_stay,
            'review' => $request->review,
        ]);
        $request->session()->flash('status', 'The Hotel review was updated');

        return redirect()->route('hotels.show', ['hotel' => $hotel_id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($hotel_id, $review_id)
    {
        //dd($hotel_id, $review_id);

        $review = Review::findOrFail($review_id);

        $review->delete();

        session()->flash('status', 'The Review was deleted');

        return redirect()->route('hotels.index');
    }
}
