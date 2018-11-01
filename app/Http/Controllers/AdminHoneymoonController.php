<?php

namespace App\Http\Controllers;

use App\Honeymoon;
use Illuminate\Http\Request;

class AdminHoneymoonController extends Controller
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
        $honeymoons = Honeymoon::all();
        return view('admin.honeymoon.index')->withHoneymoons($honeymoons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.honeymoon.create');
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
     * @param  \App\Honeymoon  $honeymoon
     * @return \Illuminate\Http\Response
     */
    public function show(Honeymoon $honeymoon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Honeymoon  $honeymoon
     * @return \Illuminate\Http\Response
     */
    public function edit(Honeymoon $honeymoon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Honeymoon  $honeymoon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Honeymoon $honeymoon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Honeymoon  $honeymoon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Honeymoon $honeymoon)
    {
        //
    }
}
