@extends('index')

@section('title', $title)

@section('main')
<main class="col-9">
    <div class="list-group">
        <div class="d-flex w-100 justify-content-between">
            <h3 class="mb-1">{{ $animal['name'] }}</h5>
            <a href="/animals/{{$id}}/edit"><button class="btn btn-success">Edit</button></a>
        </div>
        @isset($animal->species)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Species</h6>
            <p>{{ $animal['species'] }}</p>
        </div>
        @endisset
        @isset($animal->biteyness)
            <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Biteyness</h6>
                <p>{{ $animal['biteyness'] }}</p>
            </div>
        @endisset
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Age</h6>
            <p>{{ $animal->getAge() }}</p>
        </div>
        @isset($animal->height)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Height</h6>
            <p>{{ $animal['height']}}cm</p>
        </div>
        @endisset
        @isset($animal->weight)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Weight</h6>
            <p>{{ $animal['weight']}}g</p>
        </div>
        @endisset
        @isset($animal->owner_id)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Owner</h6>
            <a href="/owners/{{$owner->id}}"><p>{{ $owner->name }}</p></a>
        </div>
        @endisset
        @isset($animal->image)
        <div class="d-flex w-100 justify-content-between">
            <img src="{{ $animal['image']}}" alt="an image of {{ $animal['name'] }} who is a {{ $animal['species'] }}">
        </div>
        @endisset
    </div>
</main>
@endsection