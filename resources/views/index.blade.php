<!doctype html>
<html class="no-js" lang="en">
        <style>
            body {
                background-color: lavender !important;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .card-header {
                background-color: peachpuff !important;    
            }

            .card-footer {
                background-color: aliceblue !important;
                border: none !important;
            }

            .form-inline {
                border: none!important;
            }

            form {
                border: 1px solid lightgrey !important;
            }

            .card-body {
                background-color: aliceblue;
                border-bottom: solid 1px lightgrey;
                box-shadow: 3px 3px 5px 0px #444;
            }

            .list-group-item {
                box-shadow: 3px 3px 5px 0px #444;
            }

            .card-body-link: a{
                color: red !important;
            }

        </style>
    @include('parts/head')
    <body>
        <div class="container">
            <nav class="mt-4 navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="/">James's Vets</a>
            </nav>

            <!-- navigation -->
            @include('parts/nav')
            <!-- main content -->
            
            <div class="row mt-4">
                @section('main')
                <main class="col-9">
                    <h1>@yield('header', 'Welcome to James Vets')<h1>
                    <h2>THE premier cat hospital</h2>
                    <img src="@yield('image', 'https://media.giphy.com/media/vFKqnCdLPNOKc/giphy.gif')">
                </main>
                @show

                <!-- sidebar -->
                @include('parts/sidebar')

            </div>

            <!-- footer -->
            @include('parts/footer')
        </div>
    </body>
</html>