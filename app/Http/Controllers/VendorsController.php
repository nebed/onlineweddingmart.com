<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Service;
use App\Vendor;
use App\Location;
use Session;

class VendorsController extends Controller {
	
	public function __construct()
    {
        $this->middleware('web');
    }

    public function getIndex()
    {
        $services = Service::all();
        return view('vendors.index')->withServices($services);
    }

    public function getCategory($name)
    {
        $vendors = Service::where('slug',$name)->first()->vendors()->paginate(24);
        return view('vendors.category')->withVendors($vendors);
    }

    public function owmGenie($city,$name)
    {
        $validator = Validator::make(
            array(
                'city' => $city,
                'service' => $name,
            ),
            array(
                'city' => 'exists:locations,slug',
                'service' => 'exists:services,slug',
            )
        );
        if($validator->fails())
        {
            Session::flash('info','sorry we could not find any of those');
            return redirect('/');
        }
        $service = Service::where('slug', $name)->first()->id;
        $location = Location::where('slug', $city)->first()->id;
        $vendors =  Vendor::where('location_id',$location)->where('service_id',$service)->paginate(24);
        return view('vendors.category')->withVendors($vendors);
    }

    public function findVendors(Request $request)
    {
        $this->validate($request, array(
            'location_id' => 'required|integer',
            'service_id'=>'required|integer'
        ));
        $service_name=Service::find($request->service_id)->slug;
        $location_name=Location::find($request->location_id)->slug;
        return redirect()->route('city.vendors',[$location_name,$service_name]);
    }
	
}