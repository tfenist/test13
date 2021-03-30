<?php

namespace App\Http\Controllers;

use App\Models\topick;
use Illuminate\Http\Request;

class TopickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['topick'] =Topick::all();
        return view('authors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
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
     * @param  \App\Models\topick  $topick
     * @return \Illuminate\Http\Response
     */
    public function show(topick $topick)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topick  $topick
     * @return \Illuminate\Http\Response
     */
    public function edit(topick $topick)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\topick  $topick
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topick $topick)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topick  $topick
     * @return \Illuminate\Http\Response
     */
    public function destroy(topick $topick)
    {
        //
    }
}
