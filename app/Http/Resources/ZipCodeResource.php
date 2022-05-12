<?php

namespace App\Http\Resources;

use App\Http\Resources\SettlementsCollectionResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ZipCodeResource extends JsonResource
{
    /**
     * Removes data wrapper from the resource.
     */
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'zip_code' => $this->zip_code,
            'locality' => $this->locality,
            'federal_entity' => [
                'key' => $this->federalEntity->key,
                'name' => Str::upper($this->federalEntity->name),
                'code' => $this->federalEntity->code,
            ],
            'settlements' => new SettlementsCollectionResource($this->settlements),
            'municipality' => [
                'key' => $this->municipality->key,
                'name' => Str::upper($this->municipality->name),
            ],
        ];
    }
}
