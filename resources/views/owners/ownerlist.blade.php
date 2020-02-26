@extends('index')

@section('title', $title)

@section('main')
<main class="col-9">
    <div class="list-group">
        @foreach ($owners as $owner)
            <a href="/owners/{{$owner->id}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $owner['name'] }}</h5>
                </div>
            </a>
        @endforeach
    </div>
</main>
@endsection 