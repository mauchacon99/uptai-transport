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
    <p class="text-muted"> Listado de conductores que han trabajado o circulado en la ruta actual en el Autobus control {{ $cars->number}} con placa {{$cars->plate}}</p>
    <table class="table display table-striped table-bordered cellspacing="0" width="100%">
        <thead>
            <tr>
                <th data-class-name="priority"> C.I </th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th> Ruta </th>
                <th>Fecha salida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exits as $exit)
                <tr>
                    <td> {{ $exit->drivers->identity }} </td>
                    <td> {{ $exit->drivers->name   }} </td>
                    <td> {{ $exit->drivers->surname}} </td>
                    <td> 	 {{ $exit->routes->addresesExit->name}} 
    				-{{ $exit->routes->addresesIntermediate->name }}-       	
    				 {{ $exit->routes->addresesDestination->name}}	  </td>
                    <td> {{ $exit->details->date_exit}} </td>
                </tr>
            @endforeach
        </tbody>
     </table>
</body>
</html>