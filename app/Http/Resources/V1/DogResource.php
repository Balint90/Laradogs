<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     title="DogResource",
 *     description="DogResource model",
 *     @OA\Xml(
 *         name="DogResource"
 *     )
 * )
 */
class DogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

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
         *     title="BreedID",
         *     description="ID of a Breed",
         *     format="int64",
         *     example=1
         * )
         *
         * @var integer
         */

        /**
         * @OA\Property(
         *      title="Name",
         *      description="Name of the dog",
         *      example="Retek"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="Age",
         *      description="Age of the dog",
         *      example="10 év"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="Weight",
         *      description="The dog's weight",
         *      example="50 kg"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="Height",
         *      description="The Dog's height",
         *      example="50 cm"
         * )
         *
         * @var string
         */

        /**
         * @OA\Property(
         *      title="Picture",
         *      description="URL or local path to the dog's picture",
         *      example=""
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
            'breedId' => $this->breed_id,
            'name' => $this->name,
            'age' => $this->age,
            'weight' => $this->weight,
            'height' => $this->height,
            'picture' => $this->picture,
        ];
    }
}
