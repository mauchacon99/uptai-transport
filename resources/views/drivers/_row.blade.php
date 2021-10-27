 
    <tr>
        <td>{{ $driver->identity}}</td>
        <td>{{ $driver->name }}</td>
        <td>{{ $driver->surname }}</td>
		<td>{{ $driver->sex }}</td>
		<td>{{ $driver->birthdate }}</td>
        <td>{{ $driver->phone }}</td>
        
        <td> 
        	<form action="{{  route('drivers.delete', $driver)  }}" method="POST">

	        {{ csrf_field() }}
	        {{ method_field('DELETE')}}
        
                <a href="{{ route('drivers.showRoutes', $driver) }}" class="btn btn-warning btn-circle " style="color:orage" >
                        <i class="fas fa-map-marked"></i>
                </a>
                <a href="{{ route('drivers.showCars', $driver) }}" class="btn btn-primary btn-circle ">
                        <i class="fas fa-bus-alt "></i>
                </a>
                @can('drivers.edit')
                    <a href="{{ route('drivers.show', $driver) }}" class="btn btn-success btn-circle ">
                        <i class="fas fa-user-edit "></i>
                    </a>
                @endcan
                @can('drivers.deleteSoft')
                    <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt "></span></button>
                @endcan
	    	</form>
         </td>
        
    </tr>

  
