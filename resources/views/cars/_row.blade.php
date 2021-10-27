
 <tr>
        <td> <h4> <strong>{{ $car->number}} </strong></h4></td>
        <td> @upper($car->plate)</td>
        <td>{{ $car->color }}</td>
		<td>{{ $car->year }}</td>
		<td>{{ $car->tradeMarks->description}}</td>
        <td>{{ $car->model->description }}</td>
        
        <td>
            <a href="{{ route('cars.exits', $car) }}" class="btn btn-primary btn-circle ">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </td>
        <td>
          <a href="{{ route('cars.drivers', $car)}}">
            <i class="fas fa-user-circle fa-2x" style="color: #A349A4" ></i>
          </a>
        </td>
        @hasanyrole('editor|admin')
            <td>
                @can('cars.edit')
                    <form action="{{  route('cars.delete', $car)  }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                @endcan
                @can('cars.edit')
                        <a href="{{ route('cars.show', $car) }}" class="btn btn-success btn-circle ">
                            <i class="fas fa-user-edit"></i>
                        </a>
                @endcan
                @can('cars.deleteSoft')
                        <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt"></span></button>
                @endcan
                @can('cars.edit')
                    </form>
                @endcan
            </td>
        @endhasanyrole
        @can('cars.changeStatus')
            <td>
                <a  href="{{ route('cars.status', $car) }}">
                    <i class="fa fa-toggle-{{ ($car->status)? 'on' : 'off'}} fa-2x" style="color: {{ ($car->status)? 'green' : 'red' }}" aria-hidden="true"></i>
                </a>
            </td>
        @endcan
          
       
        
 </tr>
