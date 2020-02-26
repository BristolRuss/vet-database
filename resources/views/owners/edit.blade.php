@extends('index')

@section('title', "Edit $title")

@section('main')
<main class="col-9">
<form method="post" class="form card">
        <h2 class="card-header">Edit Entry</h2>

        <fieldset class="card-body">
            @csrf

            <div class="form-group">
                <label for="name">Owner Name</label>
                <input
                    id="name"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ $owner->name }}"
                />
                @error('name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    id="title"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror"
                    value="{{ $owner->title }}"
                />
                @error('title')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="address_line_1">Address Line 1</label>
                <input
                    id="address_line_1"
                    name="address_line_1"
                    class="form-control @error('address_line_1') is-invalid @enderror"
                    value="{{ $owner->address_line_1 }}"
                />
                @error('address_line_1')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="address_line_2">Address Line 2</label>
                <input
                    id="address_line_2"
                    name="address_line_2"
                    class="form-control @error('address_line_2') is-invalid @enderror"
                    value="{{ $owner->address_line_2 }}"
                />
                @error('address_line_2')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="postcode">Postcode</label>
                <input
                    id="postcode"
                    name="postcode"
                    class="form-control @error('postcode') is-invalid @enderror"
                    value="{{ $owner->postcode }}"
                />
                @error('postcode')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="city">City</label>
                <input
                    id="city"
                    name="city"
                    class="form-control @error('city') is-invalid @enderror"
                    value="{{ $owner->city }}"
                />
                @error('city')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            
        <div class="card-footer text-right">
            <button class="btn btn-success">Save Changes</button>
        </div>
        </fieldset>

    </form>
</main>
@endsection 