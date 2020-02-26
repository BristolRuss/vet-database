<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Owner;
use App\Animal;
Use App\http\Resources\API\Owners\AnimalListResource;

class Animals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Owner $owner)
    {
        $animals = Animal::all();
        $animalList = [];
        foreach($animals as $animal)
        {
            if($animal->owner_id == $owner->id)
            {
                $animalList[] = $animal; 
            }
        }
        return AnimalListResource::collection($animalList);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal, Owner $owner)
    {
    //     $data = $request->all();
    //     $data->owner_id
    //     $animal->fill($data)->save();
    //     return $animal;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
