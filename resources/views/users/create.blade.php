 
 @extends('admin.layout')

@component('shared._breadcrumb')
     @slot('title', 'Usuarios')
      @slot('description', 'home')
      @slot('state', 'table')

@endcomponent 
      
@section('content')

<div class="misc-wrapper">
    <div class="misc-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-sm-12">
                    <div class="misc-box">   
                            <p class="text-center">Registre Nuevo Usuario</p>
                        <form role="form" method="POST" action="{{ route('register') }}">
                            {!! @csrf_field() !!}
                            <div class="form-group  @error('name') has-error @enderror">
                                <label for="name"> Nombre </label>
                                <div class="group-icon">
                                    <input id="name"  class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <span class="icon-envelope text-muted icon-input"></span>
                                    @error('name')
                                        <em id="name-error" class="error help-block">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group  @error('email') has-error @enderror">
                                <label for="email"> Correo Electronico </label>
                                <div class="group-icon">
                                    <input id="email"   class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="icon-envelope text-muted icon-input"></span>
                                    @error('email')
                                        <em id="email-error" class="error help-block">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group group-icon  @error('password') has-error @enderror">
                                <label for="password">{{ __('Password') }}</label>
                                <div class="group-icon">
                                    <input id="password" type="password" placeholder="Password" class="form-control"  name="password" required autocomplete="new-password">
                                    <span class="icon-lock text-muted icon-input"></span>
                                    @error('password')
                                        <em id="password-error" class="error help-block">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>
                                <div class="form-group group-icon @error('password') has-error @enderror">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <div class="group-icon">
                                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <span class="icon-lock text-muted icon-input"></span>
                                </div>

                                <div class="form-group group-icon @error('role') has-error @enderror">
                                    <label for="password-confirm">{{ __('Roles') }}</label>
                                    <div class="group-icon">
                                        <select name="role" class="form-control"  id="role">
                                        @foreach($roles as $rol)
                                          <option value="{{ $rol->id }}"{{ old('rol') == $rol->id ? ' selected' : ''}}> {{ $rol->name }}
                                           <span class="icon-lock text-muted icon-input"></span>
                                          </option>
                                        @endforeach
                                     </select>  
                                </div>
                                <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow mt-10">{{ __('Guardar') }}</button>
                            <hr>
                        </form>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
