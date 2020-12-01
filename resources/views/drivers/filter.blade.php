 
   <form  action="{{ route('drivers.index')}}" method="get">
      <div class="row">
          <div class="col-sm-4 mb-4">
            <input type="text" class="form-control form-control-user"value="{{request('
            search')}}"  name="search" id="search"   placeholder="Busqueda">
          </div>

            <div class="col-sm-4 mb-3">
                 <button type="submit" class="btn btn-success "> Buscar</button>
            </div>
      </div>
  </form> 
                