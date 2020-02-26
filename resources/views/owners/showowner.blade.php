@extends('index')

@section('title', $title)

@section('main')
<main class="col-9">
    <div class="list-group">
        @isset($owner->name)
        <div class="d-flex w-100 justify-content-between">
            <h3 class="mb-1">{{ $owner['name'] }}</h5>
            <a href="/owners/{{$id}}/edit"><button class="btn btn-success">Edit</button></a>
        </div>
        @endisset
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Title</h6>
            <p>{{ $owner['title'] }}</p>
        </div>
        @isset($owner->address_line_1)
            <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Address Line 1</h6>
                <p>{{ $owner['address_line_1'] }}</p>
            </div>
        @endisset
        @isset($owner->address_line_2)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Address Line 2</h6>
            <p>{{ $owner['address_line_2']  }}</p>
        </div>
        @endisset
        @isset($owner->postcode)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Postcode</h6>
            <p>{{ $owner['postcode']}}</p>
        </div>
        @endisset
        @isset($owner->city)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">City</h6>
            <p>{{ $owner['city']}}</p>
        </div>
        @endisset
        <div class="d-flex w-100 justify-content-between list-group">
            <h6 class="mb-1">Animals</h6>
            @foreach($animals as $animal)
                @if($animal->owner_id == $owner->id)
                <a href="/animals/{{$animal->id}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $animal['name'] }}</h5>
                    </div>
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1">Species</h6>
                        <p>{{ $animal['species'] }}</p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</main>
@endsection