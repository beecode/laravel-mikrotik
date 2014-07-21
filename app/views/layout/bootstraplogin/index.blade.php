<html>
    <head>
        @include('layout.bootstrapadmin.head')
    </head>
    <body>
        @include('layout.bootstrapadmin.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.bootstrapadmin.footer')
    </body>
</html>