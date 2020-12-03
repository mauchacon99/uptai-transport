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
    </tr>
