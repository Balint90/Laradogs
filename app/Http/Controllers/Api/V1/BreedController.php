<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Breed;
use App\Filters\V1\BreedFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreBreedRequest;
use App\Http\Requests\V1\UpdateBreedRequest;
use App\Http\Resources\V1\BreedCollection;
use App\Http\Resources\V1\BreedResource;
use Illuminate\Http\Request;



class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/breeds",
     *      operationId="getBreeds",
     *      tags={"Breed"},
     *      summary="Get list of breeds",
     *      description="Returns list of breeds",
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
     *      @OA\Parameter(
     *          name="includeDogs",
     *          description="Should include dogs or not. Default value: false",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="boolean"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/BreedResource")
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
        //return Breed::all();
        $filter = new BreedFilter();
        $filterItems = $filter->transform($request);

        $page = $request->query('page') ? $request->query('page') : 1;
        $itemNumber = $request->query('itemNumber') ? $request->query('itemNumber') : 10;

        $includeDogs = $request->query('includeDogs');

        $breeds = Breed::where($filterItems);

        if ($includeDogs) {
            $breeds = $breeds->with('dogs');
        }

        return new BreedCollection($breeds->paginate($itemNumber)->appends($request->query()));

        // $breeds = Breed::paginate(24);
        // return new BreedCollection($breeds);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBreedRequest  $request
     * @return \Illuminate\Http\Response
     */
    //Equals with Create
    /**
     * @OA\Post(
     *      path="/breeds",
     *      operationId="storeBreed",
     *      tags={"Breed"},
     *      summary="Store new breed",
     *      description="Returns project data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreBreedRequest")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Breed")
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
    public function store(StoreBreedRequest $request)
    {
        return new BreedResource(Breed::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/breeds/{id}",
     *      operationId="getBreedByID",
     *      tags={"Breed"},
     *      summary="Get breed information",
     *      description="Returns breed data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Breed id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Breed")
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
    public function show(Breed $breed)
    {
        $includeDogs = request()->query('includeDogs');

        if ($includeDogs) {
            return new BreedResource($breed->loadMissing('dogs'));
        }
        return new BreedResource($breed);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBreedRequest  $request
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Put(
     *      path="/breeds/{id}",
     *      operationId="updateBreed",
     *      tags={"Breed"},
     *      summary="Update existing breed",
     *      description="Returns updated breed data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Breed id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateBreedRequest")
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Breed")
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
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $breed->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Delete(
     *      path="/breeds/{id}",
     *      operationId="deleteBreed",
     *      tags={"Breed"},
     *      summary="Delete existing breed",
     *      description="Deletes a breed and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Breed id",
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
    public function destroy(Breed $breed)
    {
        $breed->delete();
    }
}
