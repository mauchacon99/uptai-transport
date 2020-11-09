


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Laravel Admin Dashboard Template</title>

        <!-- Common Plugins -->
        <link href="{{ asset('admin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom Css-->
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('admin/favicon/site.webmanifest') }}">

     
        <style type="text/css">
            html,body{
                height: 100%;
            }
        </style>
    </head>
    <body class="bg-light">
    @yield('content')

    @include('ducor::layouts.partials.layout-1.scripts')
    </body>
</html>
