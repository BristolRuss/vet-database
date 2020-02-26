@extends('index')

@section('title', $title)

@section('main')
<main class="col-9">
    <div class="list-group">
        @foreach ($animals as $animal)
            <a href="/animals/{{$animal->id}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $animal['name'] }}</h5>
                </div>
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Species</h6>
                    <p>{{ $animal['species'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
</main>
@endsection 