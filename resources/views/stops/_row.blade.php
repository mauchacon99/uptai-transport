 <tr>
	<td>
		{{$stop->name}}
	</td>
	@hasanyrole('editor|admin')
	 <td> 
	 	<form action="{{ route('stops.delete', $stop) }}" method="POST">
	    {{ csrf_field() }}
	    {{ method_field('DELETE')}}
	       <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt"></span></button>
	    </form>
     </td>
	
	   <td>
	        <a  href="{{ route('stops.status', $stop) }}">
	        <i class="fa fa-toggle-{{ ($stop->status)? 'on' : 'off'}} fa-2x" style="color: {{ ($stop->status)? 'green' : 'red' }}" aria-hidden="true"></i>
	        </a>
	    </td>
	@endhasanyrole
  
        
</tr>


