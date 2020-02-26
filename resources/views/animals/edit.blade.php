@extends('index')

@section('title', "Edit $title")

@section('main')
<main class="col-9">
<form method="post" class="form card">
        <h2 class="card-header">Edit Entry</h2>

        <fieldset class="card-body">
            @csrf

            <div class="form-group">
                <label for="name">Pet Name</label>
                <input
                    id="name"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ $animal->name }}"
                />
                @error('name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="species">Species</label>
                <input
                    id="species"
                    name="species"
                    class="form-control @error('species') is-invalid @enderror"
                    value="{{ $animal->species }}"
                />
                @error('species')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="date-of-birth">Date of Birth (yyyy-mm-dd)</label>
                <input
                    id="date-of-birth"
                    name="date-of-birth"
                    class="form-control @error('species') is-invalid @enderror"
                    value="{{ $animal->{'date-of-birth'} }}"
                />
                @error('date-of-birth')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="biteyness">Biteyness</label>
                <input
                    id="biteyness"
                    name="biteyness"
                    class="form-control @error('biteyness') is-invalid @enderror"
                    value="{{ $animal->biteyness }}"
                />
                @error('biteyness')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="weight">Weight (in grams)</label>
                <input
                    id="weight"
                    name="weight"
                    class="form-control @error('weight') is-invalid @enderror"
                    value="{{ $animal->weight }}"
                />
                @error('weight')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="height">Height (in cm)</label>
                <input
                    id="height"
                    name="height"
                    class="form-control @error('height') is-invalid @enderror"
                    value="{{ $animal->height }}"
                />
                @error('height')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="image">Picture URL</label>
                <input
                    id="image"
                    name="image"
                    class="form-control @error('image') is-invalid @enderror"
                    value="{{ $animal->image }}"
                />
                @error('image')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
            <label for="owner_id">Owner</label>
                <select class="form-control" id="owner_id" name = "owner_id">
                    @foreach ($owners as $owner)
                    <option value="{{$owner->id}}">{{$owner->name}}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="card-footer text-right">
            <button class="btn btn-success">Save Changes</button>
            </div>
        </fieldset>
         
    </form>
</main>
@endsection 