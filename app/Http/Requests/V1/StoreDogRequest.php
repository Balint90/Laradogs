<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     title="StoreDogRequest",
 *     description="StoreDogRequest model",
 *     @OA\Xml(
 *         name="StoreDogRequest"
 *     )
 * )
 */
class StoreDogRequest extends FormRequest
{
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
    public function rules()
    {
        return [
            'name' => ['required'],
            'age' => ['required'],
            'weight' => ['required'],
            'height' => ['required'],
            'breedId' => ['required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'breed_id' => $this->breedId
        ]);
    }
}
