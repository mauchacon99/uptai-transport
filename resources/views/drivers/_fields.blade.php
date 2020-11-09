{!! @csrf_field() !!}

<div class="form-group">
    <div class="row">
        <div class="col-md-4 @if($errors->has('identity')) has-error ?? has-success  @endif">
            <input 
            type="text" 
            name="identity" 
            id="identity" 
            placeholder="C.I" 
            class="
            form-control
            "
            value="{{ old('identity', $drivers->identity) }}"
            >
            @if($errors->has('identity'))
                 <div class="text-danger">{{ $errors->first('identity')}}</div>
            @endif    
        </div>

        <div class="col-md-4 @if($errors->has('name')) has-error ?? has-success  @endif">
            <input 
            type="text" 
            name="name"
             id="name" 
             placeholder="Nombre" 
             class="form-control"
             value="{{ old('name', $drivers->name) }}"
             >

            @if($errors->has('name'))
             <div class="text-danger">{{ $errors->first('name')}}</div>
            @endif
        </div>
        
        <div class="col-md-4 @if($errors->has('surname')) has-error ?? has-success  @endif">
            <input 
            type="text"
            name="surname"
            id="surname"placeholder="Apellido" 
            class="form-control"
            value="{{ old('surname', $drivers->surname) }}"
            >
            @if($errors->has('surname'))
                <div class="text-danger">{{ $errors->first('surname')}}</div>
             @endif
        </div>  
    </div>
</div>

<div clas="form-group">
    <div class="row">
        <div class="col-md-4 @if($errors->has('sex')) has-error ?? has-success  @endif">
                <select name="sex" id="sex"class="form-control">
                    <option value="Femenino"> Femenino</option>
                    <option value="Masculino"> Masculino</option>
                </select>
        </div>
        @if($errors->has('sex'))
            <div class="text-danger">{{ $errors->first('sex')}}</div>
        @endif
          
        <div class="col-md-4 @if($errors->has('phone')) has-error ?? has-success  @endif">
            <input 
            type="text"  
            name="phone" 
            id="phone"
            placeholder="Telefono"  
            class="form-control"
            value="{{ old('phone',$drivers->phone) }}"

            >
              @if($errors->has('phone'))
                <div class="text-danger">{{ $errors->first('phone')}}</div>
             @endif
        </div>
      
        <div class="col-md-4 @if($errors->has('birthdate')) has-error ?? has-success  @endif">
            <input type="date" 
            name="birthdate" 
            id="birthdate"
            placeholder="Fecha de Nacimiento" 
            class="form-control"
            value="{{ old('birthdate', $drivers->birthdate) }}"
            >

            @if($errors->has('birthdate'))
                 <div class="text-danger">{{ $errors->first('birthdate')}}</div>
            @endif
        </div>
          
    </div>
</div>