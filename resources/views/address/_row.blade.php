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
        {{-- <td>
            <a href="{{ route('address.edit', $address)}}" class="btn btn-danger btn-circle ">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
            <a  href="{{ route('address.edit', $address)}}" class="btn btn-success btn-circle ">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
        </td> --}}
    </tr>
