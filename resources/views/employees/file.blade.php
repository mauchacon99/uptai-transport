<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PDF - CONCEQUIM DE VENEZUELA </title>
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
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
            <th data-class-name="priority">C.I</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Cargo</th>
            <th> Direccion </th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $employee)
                <tr class=''>
                    <td>{{ $employee->identity}}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->surname }}</td>
                    <td>{{ $employee->sex }}</td>
                    <td>{{ $employee->birthdate }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td> {{ $employee->occupation }} </td>
                    <td> {{ $employee->address }}  </td>
                </tr>  
            @endforeach
        </tbody>
     </table>
</body>
</html>