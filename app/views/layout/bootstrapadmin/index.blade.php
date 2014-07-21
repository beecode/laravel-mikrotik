<html>
    <head>
        @include('layout.bootstrapadmin.head')
    </head>
    <body>
        @include('layout.bootstrapadmin.header')
        @include('layout.bootstrapadmin.nav')
        @include('layout.bootstrapadmin.menuleft')
        <div id="paga-wrapper">
            @yield('content')
        </div>
        @include('layout.bootstrapadmin.footer')
    </body>
</html>