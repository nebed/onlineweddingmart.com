<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;
use Validator;
use Session;

class ConfirmVendorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     */
    public function confirm($confirm_code)
    {
        $validator = Validator::make(
            array(
                'code' => $confirm_code,
            ),
            array(
                'city' => 'string',
            )
        );
        if($validator->fails())
        {
            Session::flash('info','An Error Occured');
            return redirect('/');
        }
        $vendor = Vendor::where('confirm_code',$confirm_code)->first();
        $vendor->email_confirmed = true;
        $vendor->confirm_code="";
        $vendor->save();
        Session::flash('success','Your Email has been confirmed successfully');
        return redirect()->route('vendor.login');
    }

}
