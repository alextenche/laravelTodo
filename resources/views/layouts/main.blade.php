<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> laravel tutorial </title>
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
    </head>
    <body>
        <nav class="top-bar" data-topbar>
            <ul class="menu">
                <li class="menu-text">
                    <h1><a href="#"> laravel tutorial</a></h1>
                </li>
            </ul>
        </nav>

        @if (Session::has('message'))
            <div class="alert-box success">
                {{{ Session::get('message') }}}
            </div>
        @endif

        <div class="row">
            <div class="large-12">
                @yield('content')
            </div>
        </div>

        <footer class="row">
            <div class="large-12 columns">
                <hr>
                <div class="row">
                    <div class="large-6 columns">
                        alexTenche
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/foundation.js') }}"></script>
        <script>
            $(document).foundation();
        </script>

    </body>
</html>
