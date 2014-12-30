<html>
<head>
    <meta charset="UTF-8">
    <title>Alfareeda Jobs CV Tracker</title>

    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('//cdn.datatables.net/1.10.4/css/jquery.dataTables.css') }}
    {{ HTML::style('https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css') }}
    {{ HTML::style('font-awesome/css/font-awesome.min.css') }}

    @yield('head')

    <style>
        body{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        body, table{
            font-size: 14px !important;
        }
        .tab-pane{
            min-height: 300px !important;
        }
    </style>

</head>
<body>


<div class="container-fluid table-responsive">
    @yield('content')
</div>


{{ HTML::script('jquery/jquery.min.js') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js') }}

<script>

    (function(){

        $('.datatable').DataTable({
            "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] }  ]
        });

        $('[data-toggle="tooltip"]').tooltip();

    })();

</script>

@yield('foot')

</body>
</html>