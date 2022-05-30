<html>
    <head>
        <title>Laravel App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @include('inc.topnav')
            <div>
                @yield('content')
            </div>
        </div>
        
    </body>
</html>