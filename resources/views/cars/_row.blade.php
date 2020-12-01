
 <tr>
        <td> <h4> <strong>{{ $car->number}} </strong></h4></td>
        <td> @upper($car->plate)</td>
        <td>{{ $car->color }}</td>
		<td>{{ $car->year }}</td>
		<td>{{ $car->tradeMarks->description}}</td>
        <td>{{ $car->model->description }}</td>
        <td>
              <a  class="btn btn-dark text-white btn-circle ">
                    <i class="fas fa-gears"  ></i>
                </a>
        </td>
        <td>
            <a href="{{ route('cars.exits', $car) }}" class="btn btn-primary btn-circle ">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
        </td>
        <td> 
            <form action="{{ route('cars.destroy', $car)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE')}}
            
 
                <a href="{{ route('cars.show', $car) }}" class="btn btn-success btn-circle ">
                    <i class="fas fa-user-edit"></i>
                </a>

               <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt"></span></button>
            </form>
        </td>
        @if(Auth::user()->roleUser->role->id == 2)
           <td>
                <a  href="{{ route('cars.status', $car) }}">
                <i class="fa fa-toggle-{{ ($car->status)? 'on' : 'off'}} fa-2x" style="color: {{ ($car->status)? 'green' : 'red' }}" aria-hidden="true"></i>
                </a>
            </td>
        @endif
 </tr>
