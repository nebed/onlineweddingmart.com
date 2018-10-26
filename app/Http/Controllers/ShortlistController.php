<?php

namespace App\Http\Controllers;

use App\Shortlist;
use Illuminate\Http\Request;
use Response;
use Auth;

class ShortlistController extends Controller
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
    public function create(Request $request)
    {
        $vendor = $request->vendor_id;
        if(Auth::guard('customer')->check())
        {
            $shortlist = new Shortlist;
            $shortlist->vendor_id = $vendor;
            $shortlist->customer_id = Auth::guard('customer')->user()->id;
            $shortlist->save();
            return Response::json('success', 200); 
        }else
        {
            return Response::json('failed', 205);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function show(Shortlist $shortlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Shortlist $shortlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shortlist $shortlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shortlist $shortlist)
    {
        //
    }
}
