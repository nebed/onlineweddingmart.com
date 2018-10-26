<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Auth;
use Response;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'vendor_id' => 'required|integer',
            'comment' => 'required|string',
            'rating' => 'required|integer'
        ));
        $vendor = $request->vendor_id;
        if(Auth::guard('customer')->check())
        {
            if(Review::where('customer_id' , Auth::guard('customer')->user()->id)->where('vendor_id', $vendor)->first()){
                return Response::json('success', 200);
            }
            $review = new Review;
            $review->vendor_id = $vendor;
            $review->customer_id = Auth::guard('customer')->user()->id;
            $review->rating = $request->rating;
            $review->comment = $request->comment;
            $review->save();
            return Response::json('success', 200); 
        }else
        {
            return Response::json('failed', 205);
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
