<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Str;

class SettlementsCollectionResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->collection->map(function($settlement) {
            return [
                'key' => $settlement->key,
                'name' => Str::upper($settlement->name),
                'zone_type' => Str::upper($settlement->zone_type),
                'settlement_type' => [
                    'name' => $settlement->settlement_type,
                ],
            ];
        });
    }
}
