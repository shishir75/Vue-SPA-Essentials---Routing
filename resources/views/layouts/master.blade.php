<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <link rel="stylesheet" href="/css/app.css">

    </head>

    <body>
        <div id="app">

            @include('layouts.header')

            <section class="section">
                <div class="container">
                    @yield('content')
                </div>
            </section>



        </div>


        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
