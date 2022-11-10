<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Breed",
 *     description="Breed model",
 *     @OA\Xml(
 *         name="Breed"
 *     )
 * )
 */
class Breed extends Model
{
    use HasFactory;

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

    /**
     * @OA\Property(
     *     title="Dog",
     *     description="Dogs belongs to this breed"
     * )
     *
     * @var \App\Models\Dog[]
     */
    protected $fillable = [
        'breed_name',
        'breed_group_name',
        'lifespan',
        'temperament',
        'weight_interval',
        'height_interval',
        'picture',
    ];

    public function dogs()
    {
        return $this->hasMany(Dog::class);
    }
}
