@extends('index')

@section('title', 'Create Owner')

@section('main')
<main class="col-9">
    <form method="post" class="form card">
        <h2 class="card-header">Add Owner</h2>

        <fieldset class="card-body">
            @csrf
            <div class="form-group">
                <label for="name">Title</label>
                <input
                    id="title"
                    name="title"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old("title") }}"
                />
                @error('title')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Name</label>
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
                <label for="name">Address Line 1</label>
                <input
                    id="address_line_1"
                    required
                    name="address_line_1"
                    class="form-control @error('address_line_1') is-invalid @enderror"
                    value="{{ old("address_line_1") }}"
                />
                @error('address_line_2')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Address Line 2</label>
                <input
                    id="address_line_2"
                    name="address_line_2"
                    class="form-control @error('address_line_1') is-invalid @enderror"
                    value="{{ old("address_line_2") }}"
                />
                @error('address_line_2')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Postcode</label>
                <input
                    id="postcode"
                    required
                    name="postcode"
                    class="form-control @error('postcode') is-invalid @enderror"
                    value="{{ old("postcode") }}"
                />
                @error('postcode')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">City</label>
                <input
                    id="city"
                    name="city"
                    class="form-control @error('city') is-invalid @enderror"
                    value="{{ old("city") }}"
                />
                @error('city')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-success">Add owner</button>
            </div>
            </fieldset>
            
    </form>
    
</main>
@endsection 