    <tr>
        <td>{{ $address->name}}</td>
		<td>{{ $address->parishes->name }}</td>
        <td>{{ $address->Municipalities->name }}</td>
        <td>{{ $address->states->name }}</td>
        <td>
            <a href="{{ route('stops.index', $address)}}" class="btn btn-primary btn-circle ">
                <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
            </a>
        </td>
        <td>
            <form action="{{  route('address.destroy', $address)  }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE')}}
                <a  href="{{ route('address.edit', $address)}}" class="btn btn-success btn-circle ">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt "></span></button>
	    	</form>
            
        </td>
    </tr>
