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
        Reporte del uso de autobuses del conductor   
        {{ $driver->name }} 
        {{ $driver->surname }} 
        C.I {{ $driver->identity }}  
    </p>
    <table class="table">
        <thead>
            <tr>
                <tr>
                    <th>Numero</th>
                    <th>Placa</th>
                    <th>Color</th>
                    <th>Año</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                 </tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($exits as $exit)
                <tr>
                    <td>{{ $exit->cars->number}}</td>
                    <td>{{ $exit->cars->plate }}</td>
                    <td>{{ $exit->cars->color }}</td>
                    <td>{{ $exit->cars->year }}</td>
                    <td>{{ $exit->cars->tradeMarks->description}}</td>
                    <td>{{ $exit->cars->model->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>