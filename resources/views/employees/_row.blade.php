 
    <tr>
        <td>{{ $employee->identity}}</td>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->surname }}</td>
		<td>{{ $employee->sex }}</td>
		<td>{{ $employee->birthdate }}</td>
        <td>{{ $employee->phone }}</td>
        <td> <strong> {{ $employee->occupation }} </strong> </td>
        <td> <strong> {{ $employee->address }} </strong> </td>
        <td> 
        	<form action="{{  route('empleados.destroy', $employee)  }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE')}}
                <a href="{{ route('empleados.edit', $employee) }}" class="btn btn-success btn-circle ">
                    <i class="fas fa-user-edit "></i>
                </a>
                <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt "></span></button>
	    	</form>
         </td>
    </tr>
