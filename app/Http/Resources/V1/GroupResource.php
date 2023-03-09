<?php

namespace App\Http\Resources\V1;

use App\Http\Resources\V1\CorporationResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'                  => $this->name,
            'estimated_seconds'     => $this->estimated_seconds,
            'prefix'                => $this->prefix,
            'corporation'           => new CorporationResource($this->corporation)
        ];
    }
}
