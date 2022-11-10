<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @OA\Schema(
 *     title="BreedCollection",
 *     description="BreedCollection model",
 *     @OA\Xml(
 *         name="BreedCollection"
 *     )
 * )
 */
class BreedCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
