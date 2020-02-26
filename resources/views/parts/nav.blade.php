<div class="mt-4 mb-4 text-right d-flex justify-content-between">
    <form class="form-inline" action="/search" method="get">
        <select name="field" class="form-control" id="exampleFormControlSelect1">
        <option>name</option>
        <option>species</option>
        <option>biteyness</option>
        </select>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <nav>
        <a href="/" class="btn 
        @if (Request::is('/'))
            btn-primary
        @endif
        ">Home</a>
        <a href="/about" class="btn 
        @if (Request::is('about'))
            btn-primary
        @endif">About</a>
        <a href="/contact" class="btn 
        @if (Request::is('contact'))
            btn-primary
        @endif">Contact</a>
        <a href="/animals" class="btn 
        @if (Request::is('animals'))
            btn-primary
        @endif">Animals</a>
        <a href="/owners" class="btn 
        @if (Request::is('owners'))
            btn-primary
        @endif">Owners</a>
        <a href="/animals/create" class="btn 
        @if (Request::is('animals/create'))
            btn-primary
        @endif">Add Pet</a>
        <a href="/owners/create" class="btn 
        @if (Request::is('owners/create'))
            btn-primary
        @endif">Add Owner</a>
    </nav>
</div>