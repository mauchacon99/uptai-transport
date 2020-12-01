  <form  action="" method="get">
              <div class="row">
              	 <div class="col-sm-3  mb-3">
                      <label for="search"> Buscar</label>
                         <input type="text" class="form-control form-control-user" name="search" id="search">
                    </select>
                   </div>
                  <div class="col-sm-3 mb-3">
                    <label for="from">Desde</label>
                    <input type="date" class="form-control form-control-user"value="{{request('from')}}"  name="from" id="from"   placeholder="Desde">
                    </div>
                  <div class="col-sm-3 mb-3">
                    <label for="to">Hasta</label>
                    <input type="date" class="form-control form-control-user" value="{{request('to')}}" name="to" id="to"   placeholder="Hasta">
                  </div> 
                   <div class="col-sm-3  mb-3">
	                   <br>
                 		 <i class="fas fa-search fa-2x" style="color: blue"></i>
                   </div>
              </div>
     </form>

     			