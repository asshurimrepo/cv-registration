<html>
<head>
    <meta charset="UTF-8">
    <title>Alfareeda Jobs CV Tracker</title>

    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}

    @yield('head')

    <style>
        body{
            font-size: 12px !important;
        }
    </style>

</head>
<body>


<div class="container-fluid table-responsive">
    @yield('content')
</div>


{{ HTML::script('jquery/jquery.min.js') }}

@yield('foot')

</body>
</html>