
<tr>
        <td> {{ $user->name   }}   </td>
        <td> {{ $user->email}} </td>
        <td>
           {{ $user->roles->first()->name }}
    	</td>
        @role('admin')
            <td>
                <a href="{{ route('users.bitacora', $user) }}">
                <i class="fas fa-exchange-alt fa-2x" style="color: #A349A4;"></i>
                </a>
            </td>
            <td>
                <form action="{{  route('users.delete', $user)  }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <a  href="{{ route('users.edit', $user) }}"
                        class="btn btn-success btn-circle "
                    >
                        <i class="fas fa-user-edit fa-1x"></i>
                    </a>  
                    <button type="submit" class="btn btn-danger btn-circle">
                        <span 
                        class="fas fa-trash-alt">
                        </span>
                    </button>
                </form>
            </td>
            <td>
                <a href="{{ route('users.status', $user) }}">
                    <i 
                        class="{{ $user->status == 0 ?'fa fa-toggle-off fa-2x' : 'fa fa-toggle-on fa-2x' }}"  
                        style="{{ $user->status == 0 ? 'color:red' : 'color:green'}}" 
                    >
                    </i>
                </a>
            </td>
        @endrole
</tr>