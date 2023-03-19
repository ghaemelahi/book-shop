<?php

namespace App\Http\Controllers;

use App\Models\Trust;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $from_date = null;
        $to_date = null;
        if ($request->from_date && $request->to_date) {
            $from_date = change_date($request->from_date);
            $to_date = change_date($request->to_date);
            $trust = Trust::orderBy('created_at', 'desc')->whereBetween('set_data', [$from_date, $to_date])->paginate(50);
        } else {
            $trusts = Trust::orderBy('created_at', 'desc')->paginate(50);
        }
        return view('admin.trusts.list', compact(['trusts', 'from_date', 'to_date']));
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
     * @param  \App\Models\Trust  $trust
     * @return \Illuminate\Http\Response
     */
    public function show(Trust $trust)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trust  $trust
     * @return \Illuminate\Http\Response
     */
    public function edit(Trust $trust)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trust  $trust
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trust $trust)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trust  $trust
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trust $trust)
    {
        //
    }
}
