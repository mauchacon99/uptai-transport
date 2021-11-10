<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONSTANCIA DE TRABAJO - CONCEQUIM DE VENEZUELA</title>
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
<p class="text-right font-weight-bold">San Cristobal, Venezuela, @php echo date("Y-m-d ");  @endphp</p>
<p class="text-left font-italic">SRES.</p>

<p class="text-justify">
    Por medio de la presente carta se hace constar que <span class="font-weight-bold"> {{ $employee->name }} {{ $employee->surname }} </span>,
     identificada con la cédula de identidad <span class="font-weight-bold"> V-{{$employee->identity}} </span>, actualmente es empleada de la empresa 
     Comcequim Venezuela, C.A. como <span class="font-weight-bold"> {{ $employee->occupation}} </span>desde el  {{ $employee->created_at }}, 
     percibiendo un ingreso mensual de 100$. (cien dolares americanos).
</p>

<p class="text-justify">
    Extiendo la presente carta por solicitud de la emplead@ para los fines legales que esta considere convenientes. 
</p>

<p class="text-left">Saludos cordiales.</p>

<p class="text-center font-weight-bold">
    Fidel Munoz
    <br>
    Propietario
    <br>
    Comcequim Venezuela C.A.
    <br>
    Tel. 0276-3464036
    <br>
    Email: concequimvenezuela@hotmail.com
</p>
     
</body>
</html>