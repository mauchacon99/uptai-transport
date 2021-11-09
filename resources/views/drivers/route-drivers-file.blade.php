<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Pdf </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <p>
        Reporte del uso de autobuses por el conductor 
        {{ $driver->name }} 
        {{ $driver->surname }} 
        C.I {{ $driver->identity }}
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>Km</th>
                <th>Ciudades</th>
                <th>Autobus</th>
                <th>Fecha</th>
                <th>Hora mm</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exits as $exit)
                    <tr>
                        <td> {{ $exit->routes->km   }} Km  </td>
                        <td> 
                            {{ $exit->routes->addresesExit->name}} -
                            {{ $exit->routes->addresesIntermediate->name }}  -       	
                            {{ $exit->routes->addresesDestination->name}}
                        </td>
                        <td>
                            {{ $exit->cars->plate}}
                        </td>
                        <td>
                            {{$exit->details->date_exit}}
                        </td>
                        <td>
                            {{ $exit->details->time_exit}}
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>