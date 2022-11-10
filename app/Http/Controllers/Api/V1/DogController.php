<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\DogFilter;
use App\Models\Dog;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreDogRequest;
use App\Http\Requests\V1\UpdateDogRequest;
use App\Http\Resources\V1\DogResource;
use App\Http\Resources\V1\DogCollection;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/dogs",
     *      operationId="getDogs",
     *      tags={"Dog"},
     *      summary="Get list of dogs",
     *      description="Returns list of dogs",
     *      @OA\Parameter(
     *          name="page",
     *          description="Page to show",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="itemNumber",
     *          description="How many items/page. Default value: 10",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/DogResource")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index(Request $request)
    {
        $filter = new DogFilter();
        $queryItems = $filter->transform($request);

        $randomDogs = $request->query('randomDogs');

        if ($randomDogs) {
            if (count($queryItems) == 0) {
                return new DogCollection(Dog::inRandomOrder()->paginate(24));
            } else {
                $dogs = Dog::inRandomOrder()->where($queryItems)->paginate(24);
                return new DogCollection($dogs->appends($request->query()));
            }
        } else {
            if (count($queryItems) == 0) {
                return new DogCollection(Dog::paginate(24));
            } else {
                $dogs = Dog::where($queryItems)->paginate(24);
                return new DogCollection($dogs->appends($request->query()));
            }
        }
        //return new DogCollection(Dog::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDogRequest  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Post(
     *      path="/dogs",
     *      operationId="storeDog",
     *      tags={"Dog"},
     *      summary="Store new dog",
     *      description="Returns dog data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreDogRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Dog")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function store(StoreDogRequest $request)
    {
        return new DogResource(Dog::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/dogs/{id}",
     *      operationId="getDogByID",
     *      tags={"Dog"},
     *      summary="Get dog information by ID",
     *      description="Returns dog data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Dog id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Dog")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     */
    public function show(Dog $dog)
    {
        return new DogResource($dog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDogRequest  $request
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Put(
     *      path="/dogs/{id}",
     *      operationId="updateDog",
     *      tags={"Dog"},
     *      summary="Update existing dog",
     *      description="Returns updated dog data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Dog id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateDogRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Dog")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function update(UpdateDogRequest $request, Dog $dog)
    {
        $dog->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Delete(
     *      path="/dogs/{id}",
     *      operationId="deleteDog",
     *      tags={"Dog"},
     *      summary="Delete existing dog",
     *      description="Deletes a dog and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Dog id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();
    }
}
