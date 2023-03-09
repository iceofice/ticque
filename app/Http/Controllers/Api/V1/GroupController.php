<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreGroupRequest;
use App\Http\Resources\V1\GroupCollection;
use App\Http\Resources\V1\GroupResource;
use App\Models\Group;
use Auth;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    // TODO: Add a way to create parent/child group
    // TODO: Add a way to reset ticket number
    // TODO: Add a way to automatically reset
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Auth::user()->corporation->groups;

        return new GroupCollection($groups);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        $corporation = Auth::user()->corporation;
        $group = $corporation->groups()->create($request->validated());

        return new GroupResource($group);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return new GroupResource($group);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
