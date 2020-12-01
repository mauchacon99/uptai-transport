<tr>
        <td> {{ $user->name   }}   </td>
        <td> {{ $user->email}} </td>
        <td>
        	{{  $user->roleUser->role->description }} 
    	</td>
    	<td>
            <a href="{{ route('users.bitacora', $user) }}">
        	   <i class="fas fa-exchange-alt fa-2x" style="color: #A349A4;"></i>
            </a>
    	</td>
        <td>
             <a  class="btn btn-success btn-circle ">
                <i class="fas fa-user-edit fa-1x"></i>
            </a>  
             <a  class="btn btn-danger btn-circle ">
                <i class="fas fa-trash-alt fa-1x"></i>
            </a>  
        </td>
        
        <td>
            @if($user->status == 'false')
                 <a href="{{ route('users.status', $user) }}">
                    <i class="fa fa-toggle-off fa-2x"  style="color:red" aria-hidden="true"></i>
                </a>
                @else
                <a href="{{ route('users.status', $user) }}">
                    <i class="fa fa-toggle-on fa-2x" style="color:green" aria-hidden="true"></i>
                </a>
            @endif
        </td>
   
 

</tr>