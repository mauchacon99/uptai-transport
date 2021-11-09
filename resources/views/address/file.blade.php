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
    <h4 class="text-center text-capitalize">  {{ $collection }} reports </h4>
    <table class="table">
        <thead>
        <tr>
            <th>Ciudad</th>
            <th>Parroquia</th>
            <th>Municipio</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $address)
                <tr>
                    <td>{{ $address->name}}</td>
                    <td>{{ $address->parishes->name }}</td>
                    <td>{{ $address->Municipalities->name }}</td>
                    <td>{{ $address->states->name }}</td>
                   
                </tr>  
            @endforeach
        </tbody>
     </table>
</body>
</html>