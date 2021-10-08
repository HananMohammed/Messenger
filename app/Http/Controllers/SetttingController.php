<?php

namespace App\Http\Controllers;

use App\Models\Settting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetttingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(DB::connection()->getDatabaseName())
        {
            echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
        }
        dd(Settting::all());
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
     * @param  \App\Models\Settting  $settting
     * @return \Illuminate\Http\Response
     */
    public function show(Settting $settting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settting  $settting
     * @return \Illuminate\Http\Response
     */
    public function edit(Settting $settting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Settting  $settting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settting $settting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settting  $settting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settting $settting)
    {
        //
    }
}
