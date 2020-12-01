{!! @csrf_field() !!}


 <div class="form-group">
    <div class="row">
        <div class="col-md-2 @if($errors->has('number')) has-error ?? has-success  @endif">
            <input 
                type="number" 
                name="number" 
                id="number" 
                placeholder="Numero" 
                class="
                form-control
                "
                value="{{ old('number', $cars->number) }}"
            >
            @if($errors->has('number'))
                 <div class="text-danger">{{ $errors->first('number')}}</div>
            @endif    
        </div>
        <div class="col-md-2 @if($errors->has('chairs')) has-error ?? has-success  @endif">
            <input 
                type="chairs" 
                name="chairs" 
                id="chairs" 
                placeholder="Nro de Puestos" 
                class="
                form-control
                "
                value="{{ old('chairs', $cars->chairs) }}"
            >
            @if($errors->has('chairs'))
                 <div class="text-danger">{{ $errors->first('chairs')}}</div>
            @endif    
        </div>

        
        
        <div class="col-md-4 @if($errors->has('color')) has-error ?? has-success  @endif">
            <input 
            type="text"
            name="color"
            id="color"placeholder="Color" 
            class="form-control"
            value="{{ old('color', $cars->color) }}"
            >
            @if($errors->has('color'))
                <div class="text-danger">{{ $errors->first('color')}}</div>
             @endif
        </div>  

        <div class="col-md-4 @if($errors->has('plate')) has-error ?? has-success  @endif">
            <input 
            type="text" 
            name="plate"
             id="plate" 
             placeholder="Placa" 
             class="form-control"
             value="{{ old('plate', $cars->plate) }}"
             >

            @if($errors->has('plate'))
             <div class="text-danger">{{ $errors->first('plate')}}</div>
            @endif
        </div>
    </div>
</div>

<div clas="form-group">
    <div class="row">
        <div class="col-md-4 @if($errors->has('year')) has-error ?? has-success  @endif">
                <select name="year" id="year"class="form-control">
                    <option value="1999"> 1999</option>
                    <option value="2000"> 2000</option>
                </select>
        </div>
        @if($errors->has('year'))
            <div class="text-danger">{{ $errors->first('year')}}</div>
        @endif
          
        
        <div class="col-md-4 @if($errors->has('tradeMarks')) has-error ?? has-success  @endif">
            <select name="trade_marks_id" class="form-control"  id="trade_marks_id">
                  <option value=""> Seleciona una Marca</option>


              @foreach($tradeMarks as $trade)

                  <option value="{{ $trade->id }}"{{ old('trade_marks_id') == $trade->id ? ' selected' : ''}}> {{ $trade->description }}</option>
                
              @endforeach
        </select>  

        </div>
        @if($errors->has('tradeMarks'))
            <div class="text-danger">{{ $errors->first('tradeMarks')}}</div>
        @endif
        
        <div class="col-md-4 @if($errors->has('models')) has-error ?? has-success  @endif">
                <select name="models_id" id="models_id"class="form-control">
                    <option value=""> Selecione un Modelo</option>
                @foreach($Models as $model)
                  <option value="{{ $model->id }}"{{ old('models_id') == $model->id ? ' selected' : ''}}> {{ $model->description }}</option>
                @endforeach
                </select>
        </div>
        @if($errors->has('models'))
            <div class="text-danger">{{ $errors->first('models')}}</div>
        @endif
          
    </div>
</div>

