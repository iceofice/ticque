<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CorporationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'corporation_name'  => $this->name,
            'service'           => $this->service,
            'full_name'         => $this->users->first()->name,
            'email'             => $this->users->first()->email,
        ];
    }
}
