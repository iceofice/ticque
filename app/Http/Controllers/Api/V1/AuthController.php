<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\LoginRequest;
use App\Http\Requests\V1\RegisterCorporationRequest;
use App\Http\Resources\V1\CorporationResource;
use App\Models\Corporation;
use Auth;

class AuthController extends Controller
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

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return Auth::user()->createToken('token')->plainTextToken;
        }

        return 'wrong'; //TODO: Handle Wrong Credentials
    }
}
