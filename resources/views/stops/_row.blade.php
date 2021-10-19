 <tr>
	<td>
		{{$stop->name}}
	</td>
	 <td> 
	 	<form action="{{ route('stops.delete', $stop) }}" method="POST">
	    {{ csrf_field() }}
	    {{ method_field('DELETE')}}
	    

	        <a href="" class="btn btn-success btn-circle ">
	            <i class="fas fa-user-edit"></i>
	        </a>

	       <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt"></span></button>
	    </form>
     </td>
    {{-- @if(Auth::user()->roleUser->role->id == 2) --}}
	   <td>
	        <a  href="{{ route('stops.status', $stop) }}">
	        <i class="fa fa-toggle-{{ ($stop->status)? 'on' : 'off'}} fa-2x" style="color: {{ ($stop->status)? 'green' : 'red' }}" aria-hidden="true"></i>
	        </a>
	    </td>
    {{-- @endif  --}}
        
</tr>


