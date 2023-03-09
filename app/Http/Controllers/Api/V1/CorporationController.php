<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Corporation;
use Illuminate\Http\Request;

class CorporationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Corporation::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return redirect();
    }

    /**
     * Display the specified resource.
     */
    public function show(Corporations $corporations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Corporations $corporations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Corporations $corporations)
    {
        //
    }
}
