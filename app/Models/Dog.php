<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Dog",
 *     description="Dog model",
 *     @OA\Xml(
 *         name="Dog"
 *     )
 * )
 */
class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'weight',
        'height',
        'breed_id'
    ];

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
