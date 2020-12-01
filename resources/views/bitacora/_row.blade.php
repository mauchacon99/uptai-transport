<tr>
        <td>{{ $activity->action}}</td>
        <td>{{ $activity->users->name }}</td>
        <td>{{ $activity->name_model }}</td>
		<td>
            {{ $activity->description}}
        </td>
        <td>{{ $activity->created_at }}</td>
		<td>{{ $activity->ip_address }}</td>
  
    </tr>

<div class="modal fade" id="modalActivity_{{$activity->id}}" tabindex="-1" role="dialog" aria-labelledby="modalActivityLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalActivityLabel">Detalles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                 {{ $activity->description}}   
        </div>
        <div class="modal-footer">
            <h5 style="color:blue">
                <a href="">  </a>
            </h5>
        </div>
    </div>
  </div>
</div>