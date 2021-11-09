<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Pdf </title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>
<body>
    <div class="mb-4">
        <div class="row  ">
            <div class="col-4 justify-content-start">
                <img src="admin/img/logo-nav.png" class="logo-icon margin-r-10">
            </div>
            <div class="col-4  ">
            </div>
        </div>
    </div>
    <h4 class="text-center text-capitalize">   Reporte de {{ $collection }}   </h4>
    <table class="table">
        <thead>
        <tr>
            <th>Km</th>
            <th>Ciudades</th>
            <th>Referencia</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $route)
                <tr>
                    <td> 
                        {{ $route->km }} Km  
                    </td>
                    <td> 
                      {{ $route->addresesExit->name}} 
                    - {{ $route->addresesIntermediate->name }}
                    - {{ $route->addresesDestination->name}}
                    </td>
                    <td>
                        <p> 
                            {{ $route->addresesExit->name }} : {{ $route->addresesExit->starting_point }} 
                        </p> 
                        <p>
                            {{ $route->addresesIntermediate->name }} : {{ $route->addresesIntermediate->starting_point }} 
                        </p>
                        <p>
                            {{$route->addresesDestination->name}}: {{$route->addresesDestination->starting_point}} 
                        </p>
                    </td>
                </tr>  
            @endforeach
        </tbody>
     </table>
</body>
</html>