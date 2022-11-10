<?php

namespace App\Http\Requests\V1;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     title="StoreBreedRequest",
 *     description="StoreBreedRequest model",
 *     @OA\Xml(
 *         name="StoreBreedRequest"
 *     )
 * )
 */
class StoreBreedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();

        return $user != null && $user->tokenCan('create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
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
    public function rules()
    {
        return [
            'breedName' => ['required'],
            'breedGroupName' => ['required', Rule::in(['Sport', 'Vadász', 'Munka', 'Terrier', 'Játék', 'Nem-Sport', 'Pásztor'])],
            'lifespan' => ['required'],
            'temperament' => ['required'],
            'weightInterval' => ['required'],
            'heightInterval' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'breed_name' => $this->breedName,
            'breed_group_name' => $this->breedGroupName,
            'weight_interval' => $this->weightInterval,
            'height_interval' => $this->heightInterval
        ]);
    }
}
