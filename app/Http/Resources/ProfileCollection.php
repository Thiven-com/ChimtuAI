<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProfileCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'data' => $this->collection->map(function ($data) {
                return [
                    'id' => $data->id,
                    'name' => $data->name,
                    'mobile' => $data->mobile,
                    'email' => $data->email,
                    'wallet' => $data->wallet,
                    'state_id' => $data->state_id,
                    'city_id' => $data->city_id,
                    'city' => $data->city->name ?? '',
                    'state' => $data->state->name ?? '',
                    'profile_pic' => isset($data->profile_pic) ? url($data->profile_pic) : null,
                    "created_at" => Carbon::parse($data->created_at)->format('Y-m-d'),
                    "updated_at" => Carbon::parse($data->updated_at)->format('Y-m-d'),
                ];
            })
        ];
    }
}
