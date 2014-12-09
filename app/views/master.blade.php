<html>
<head>
    <meta charset="UTF-8">
    <title>Alfareeda Jobs CV Tracker</title>

    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}

    @yield('head')

    <style>
        body{
            padding-top: 10px;
        }
        body, table{
            font-size: 14px !important;
        }
        .tab-pane{
            min-height: 300px;
        }
    </style>

</head>
<body>


<div class="container-fluid table-responsive">
    @yield('content')
</div>


{{ HTML::script('jquery/jquery.min.js') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}

@yield('foot')

</body>
</html>