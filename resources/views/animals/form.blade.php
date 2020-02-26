@extends('index')

@section('title', 'Create Entry')

@section('main')
<main class="col-9">
    <form method="post" class="form card">
        <h2 class="card-header">Add Animal</h2>

        <fieldset class="card-body">
            @csrf

            <div class="form-group">
                <label for="name">Pet Name</label>
                <input
                    id="name"
                    required
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old("name") }}"
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
                    required
                    name="species"
                    class="form-control @error('species') is-invalid @enderror"
                    value="{{ old("species") }}"
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
                    required
                    id="date-of-birth"
                    name="date-of-birth"
                    class="form-control @error('species') is-invalid @enderror"
                    value="{{ old("date-of-birth") }}"
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
                    value="{{ old("biteyness") }}"
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
                    value="{{ old("weight") }}"
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
                    value="{{ old("height") }}"
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
                    value="{{ old("image") }}"
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
            <button class="btn btn-success">Add animal</button>
            </div>
        </fieldset>

        
    </form>
</main>
@endsection 