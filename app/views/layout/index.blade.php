<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Monitoring</title>
        @include('layout.head')
    </head>
    <body>


        @include('layout.header')



        @include('layout.nav') 

        <div class="container">            
            <!--isi container-->
            <div class="col-md-9 col-md-push-3">
            </div>
            @yield('content')

        </div>




        @include('layout.footer')

    </body>

</html>