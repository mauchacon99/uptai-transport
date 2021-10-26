<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  Comcequim </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Common Plugins -->

    <link href="{{ asset('admin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/toastr/jquery.toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset( 'admin/lib/datatables/jquery.dataTables.min.css' ) }}" rel="stylesheet" type="text/css">
    <link href="{{ asset( 'admin/lib/datatables/responsive.bootstrap.min.css' ) }}" rel="stylesheet" type="text/css">
    <link href="{{ asset( 'admin/lib/datatables/buttons.dataTables.css' ) }}" rel="stylesheet" type="text/css">

    <!-- Custom Css-->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/img/logo-nav.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/img/logo-nav.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/img/logo-nav.png') }}">
    <link rel="manifest" href="{{ asset('admin/img/logo-nav.png') }}">
    
    @yield('meta')
    <style>
    .pointer{
            cursor: pointer;
    }
    * {
        margin: 0;
        padding: 0;
    }
    .noselect {
        -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
                -ms-user-select: none; /* Internet Explorer/Edge */
                    user-select: none; /* Non-prefixed version, currently
                                        supported by Chrome, Edge, Opera and Firefox */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
