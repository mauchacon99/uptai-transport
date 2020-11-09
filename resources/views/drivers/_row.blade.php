    <tr>
        <td>{{ $driver->identity}}</td>
        <td>{{ $driver->name }}</td>
        <td>{{ $driver->surname }}</td>
		<td>{{ $driver->sex }}</td>
		<td>{{ $driver->birthdate }}</td>
        <td>{{ $driver->phone }}</td>
        <td> 
        	<form action="{{ route('drivers.destroy', $driver)}}" method="POST">
	        {{ csrf_field() }}
	        {{ method_field('DELETE')}}
            
 
                <a href="{{ route('drivers.show', $driver) }}" class="btn btn-success btn-circle ">
                    <i class="fas fa-user-edit"></i>
                </a>
	           <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt"></span></button>
	    	</form>
         </td>
    </tr>

  
