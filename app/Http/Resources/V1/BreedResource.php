<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     title="BreedResource",
 *     description="BreedResource model",
 *     @OA\Xml(
 *         name="BreedResource"
 *     )
 * )
 */
class BreedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //Original
        //return parent::toArray($request);

        //Modified
        //JSON conventional display: camelCase

        /**
         * @OA\Property(
         *     title="ID",
         *     description="ID",
         *     format="int64",
         *     example=1
         * )
         *
         * @var integer
         */

        /**
         * @OA\Property(
         *      title="BreedName",
         *      description="Name of the new breed",
         *      example="Mudi"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="BreedGroupName",
         *      description="Breed group name the breed belongs to",
         *      example="Sport"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="LifeSpan",
         *      description="How many years is the given breed's life span",
         *      example="10-15 years"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="Temperament",
         *      description="The temperament of the given breed",
         *      example="Temperament"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="Weight Interval",
         *      description="The given breed's weight interval",
         *      example="30-50 kg"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="Height Interval",
         *      description="The given breed's height interval",
         *      example="50-60 cm"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *     title="Created at",
         *     description="Created at",
         *     example="2020-01-27 17:50:45",
         *     format="datetime",
         *     type="string"
         * )
         *
         * @var \DateTime
         */

        /**
         * @OA\Property(
         *     title="Updated at",
         *     description="Updated at",
         *     example="2020-01-27 17:50:45",
         *     format="datetime",
         *     type="string"
         * )
         *
         * @var \DateTime
         */

        return [
            'id' => $this->id,
            'breedName' => $this->breed_name,
            'breedGroupName' => $this->breed_group_name,
            'picture' => $this->picture,
            'lifespan' => $this->lifespan,
            'temperament' => $this->temperament,
            'weightInterval' => $this->weight_interval,
            'heightInterval' => $this->height_interval,
            'dogs' => DogResource::collection($this->whenLoaded('dogs')),
        ];
    }
}
