 {!! @csrf_field() !!}

        
<div clas="form-group">
    <div class="row">
    	 <div class="col-md-3 @if($errors->has('identity')) has-error ?? has-success  @endif">
            <input 
            type="text" 
            name="identity" 
            id="identity" 
            placeholder="Kilometros" 
            class="
            form-control
            "
            value="{{ old('identity', $drivers->identity) }}"
            >
            @if($errors->has('identity'))
                 <div class="text-danger">{{ $errors->first('identity')}}</div>
            @endif    
        </div>
        <div class="col-md-3 @if($errors->has('sex')) has-error ?? has-success  @endif">
                <select name="sex" id="sex"class="form-control">
                    <option value="Femenino"> Ciudad Principal</option>
                 </select>
        </div>
        @if($errors->has('sex'))
            <div class="text-danger">{{ $errors->first('sex')}}</div>
        @endif
          
        <div class="col-md-3 @if($errors->has('sex')) has-error ?? has-success  @endif">
                <select name="sex" id="sex"class="form-control">
                    <option value="Femenino"> Ciudad Intermedia</option>
                 </select>
        </div>
        @if($errors->has('sex'))
            <div class="text-danger">{{ $errors->first('sex')}}</div>
        @endif
     	
     	<div class="col-md-3 @if($errors->has('sex')) has-error ?? has-success  @endif">
                <select name="sex" id="sex"class="form-control">
                    <option value="Femenino"> Ciudad de Retorno</option>
                 </select>
        </div>
        @if($errors->has('sex'))
            <div class="text-danger">{{ $errors->first('sex')}}</div>
        @endif
          
    </div>
</div>