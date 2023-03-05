<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\RegisterCorporationRequest;
use App\Http\Resources\V1\CorporationResource;
use App\Models\Corporation;
use Illuminate\Http\Request;

class CorporationController extends Controller
{
    public function register(RegisterCorporationRequest $request)
    {
        //TODO: Move into service/task
        $corporation = Corporation::create([
            'name' => $request->corporation_name,
            'service' => 'Default-Service' // Temporary Value
        ]);

        $corporation->users()->create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return new CorporationResource($corporation);
    }
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
