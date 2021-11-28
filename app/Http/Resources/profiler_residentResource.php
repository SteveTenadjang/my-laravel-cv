<?php

namespace App\Http\Resources;

use App\Models\profiler_info;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class profiler_residentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'place_of_residence' => $this->place_of_residence,
            'city_of_residence' => $this->city_of_residence,
            'country_of_residence' => $this->country_of_residence,
            'residence_longitude' => $this->residence_longitude,
            'residence_latitude' => $this->residence_latitude,
            'profiler_info' => profiler_info::collection($this->profiler_info_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
