<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title', 'Homepage')</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            <nav class="mt-4 navbar navbar-light bg-light">
                <a class="navbar-brand" href="/">James's Vets</a>
            </nav>

            <!-- navigation -->
            @include('parts/nav')
            <!-- main content -->
            <div class="row mt-4">
                <main class="col-12">
                    <h1>@yield('header', 'Welcome to James Vets')<h1>
                    <h2>THE premier cat hospital</h2>
                    <img src="@yield('image', 'https://media.giphy.com/media/vFKqnCdLPNOKc/giphy.gif')">
                </main>

            </div>

            <!-- footer -->
            @include('parts/footer')
        </div>
    </body>
</html>