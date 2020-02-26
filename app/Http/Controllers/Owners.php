<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owner;
use App\Animal;
use App\Http\Requests\OwnerRequest;

class Owners extends Controller
{
    public function index(){
        return view('owners/ownerlist', [
            "title" => 'Owners',
            "owners" => Owner::all(),
        ]);
    }

    public function show(Owner $owner){
        $length = Owner::count();
        return view('owners/showowner', [
            "title" => $owner->name,
            'owner' => $owner, "id" => $owner->id, 'animals' => Animal::all()
        ]);
    }

    public function create(){
        return view('owners/createowner');
    }

    public function createOwner(OwnerRequest $request){
        $data = $request->all();
        
        $owner = Owner::create($data);

        return redirect("/owners/$owner->id");
    }

    public function edit(Owner $owner){
        return view('owners/edit', [
            "title" => $owner->name,
            'owner' => $owner,
        ]);
    }

    public function editOwner(OwnerRequest $request, Owner $owner){
        $data = $request->all(); // data from form (new values)

        // $animal animal object (old values)

        $owner->fill($data)->save();

        return redirect("/owners/$owner->id");
    }
}
