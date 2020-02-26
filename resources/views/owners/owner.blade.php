@extends('index')

@section('title', 'Owners')

@section('main')
<main class="col-9">
    <div class="list-group">
    <p>'hello'</p>
        <!-- @isset($owner->address_line_1)
        <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">Address</h6>
            <p>{{ $owner['address_line_1'] }}</p>
        </div>
        @endisset
        @isset($owner->address_line_2)
        <div class="d-flex w-100 justify-content-between">
            <p>{{ $owner['address_line_2'] }}</p>
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
        @endisset -->
    </div>
</main>
@endsection