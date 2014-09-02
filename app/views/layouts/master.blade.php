<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Run | @yield('pageTitle', 'Home')</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link href="/css/animate-custom.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    @yield('head')
</head>
<body>

    @include('partials/nav')

    @yield('content')

    <br/><br/>
    <div class="well">
        <div class="container">
            <p class="pull-right"><span class="icon icon-mug"></span> &copy; {{ date('Y') }} Coffee Run Inc.</p>
        </div>
    </div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>