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
    <h4 class="text-center text-capitalize">  {{ $collection }} reports </h4>
    <table class="table">
        <thead>
          <tr>
            @foreach($data as $key => $value)
              @foreach($value as $item => $result)
                @if($item != 'created_at' && $item != 'updated_at' && $item != 'deleted_at' && $item != 'status' && $item != 'email_verified_at' &&  $item != 'password'  &&  $item != 'id')
                  <th> {{ $item  }}  </th>
                @endif
              @endforeach
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key => $value)
          <tr>
            @foreach($value as $item => $result)
              @if($item != 'created_at' && $item != 'updated_at' && $item != 'deleted_at' && $item != 'status' && $item != 'email_verified_at' &&  $item != 'password' &&  $item != 'id' )
                <th  > {{ $value->$item  }}  </th>
              @endif
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>