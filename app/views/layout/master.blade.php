<!DOCTYPE html>
<html>
<head>
    <title>Rock n Roll!!</title>
    <link rel="stylesheet" href="{{asset('/assets//css/bootstrap.min.css')}}">
 
</head>
<body>
<div class="container">
 
@section('navbar')
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('bands') }}">View All Bands</a></li>
            <li><a href="{{ URL::to('bands/create') }}">Create a Band</a>
        </ul>
    </nav>
@show
 
@yield('content')
</div>
</body>
</html> 