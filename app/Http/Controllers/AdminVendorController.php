<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Customer;
use App\Project;
use App\Shorlist;
use App\Review;
use Session;

class AdminVendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $vendor = Vendor::find($id);
        $projects = Project::where('vendor_id', $id)->get();
        return view('admin.showvendor')->withVendor($vendor)->withProjects($projects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $vendor = Vendor::find($id);
        $this->validate($request, array(
                    'approved' => 'boolean',
                ));
        $vendor->approved = $request->input('approved');
        $vendor->save();
        return redirect()->route('admin.dashboard'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor= Vendor::find($id);
        $reviews = Review::where('vendor_id',$id)->get();
        foreach($reviews as $review)
        {
            $review->delete();
        }
        $shortlists = Shortlist::where('vendor_id',$id)->get();
        foreach($shortlists as $shortlist)
        {
            $shortlist->delete();
        }
        $projects = Project::where('vendor_id', $id)->get();
        foreach($projects as $project)
        {
            $project->vendor()->dissociate($vendor);
        }
        $vendor->delete();
        Session::flash('success','The vendor was deleted successfully');
        return redirect()->route('admin.dashboard');
    }
}
