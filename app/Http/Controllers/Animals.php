<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Animal;
use App\Owner;
use App\Http\Requests\AnimalRequest;

class Animals extends Controller
{
    public function index(){
        return view('animals/list', [
            "title" => 'Animals',
            "animals" => Animal::all(),
        ]);
    }

    public function show(Animal $animal){
        return view('animals/show', [
            "title" => $animal->name,
            'animal' => $animal, "id" => $animal->id, 'owner' => Owner::find($animal->owner_id)
        ]);
    }

    public function search(Request $request){
        $search = $request->get('query');
        $field = $request->get('field');

        $results = Animal::where("{$field}", 'like', "%{$search}%")
                            ->get();

        return view('animals/list', [
            "title" => 'Search Results',
            'animals' => $results,
        ]);
    }

    public function create(){
        return view('animals/form', [
            'owners' => Owner::all()
        ]);
    }

    public function createPet(AnimalRequest $request){
        $data = $request->all();
        
        $animal = Animal::create($data);

        return redirect("/animals/$animal->id");
    }

    public function edit(Animal $animal){
        return view('animals/edit', [
            "title" => $animal->name,
            'animal' => $animal, 
            'owners' => Owner::all(),
        ]);
    }

    public function editPet(AnimalRequest $request, Animal $animal){
        $data = $request->all(); // data from form (new values)

        // $animal animal object (old values)

        $animal->fill($data)->save();

        return redirect("/animals/$animal->id");
    }

    // public function deletePet(AnimalRequest $request, Animal $animal){
    //     $data = $request->all(); // data from form (new values)

    //     // $animal animal object (old values)

    //     $animal->delete();

    //     return redirect("/animals");
    // }
}