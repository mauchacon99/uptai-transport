@extends('admin.auth')

@section('content')

<div class="misc-wrapper">
    <div class="misc-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-sm-12">
                    <div class="misc-header text-center">
                        <img alt="{{ __('Login') }}" src="{{ asset('admin/img/icon.png') }}" class="logo-icon margin-r-10">
                        <img alt="{{ __('Login') }}" src="{{ asset('admin/img/logo-dark.png') }}" class="toggle-none hidden-xs">
                    </div>
                    <div class="misc-box">   
                        <form role="form" method="post" action="{{ route('login') }}">
                         @csrf
                            <div class="form-group @error('email') has-error @enderror">                                      
                                <label  for="email">{{ __('Correo Electronico') }}</label>
                                <div class="group-icon">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="icon-user text-muted icon-input"></span>
                                
                                @error('email')
                                    <em id="email-error" class="error help-block">{{ $message }}</em>
                                @enderror

                                </div>
                            </div>
                            <div class="form-group @error('password') has-error @enderror">
                                <label for="password">{{ __('Contraseña') }}</label>
                                <div class="group-icon">
                                    <input id="password" type="password" placeholder="Contraseña" class="form-control " name="password" required autocomplete="current-password">
                                    <span class="icon-lock text-muted icon-input"></span>
                                    @error('password')
                                        <em id="password-error" class="error help-block">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>

                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="checkbox checkbox-primary margin-r-5">
                                        <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember"> {{ __('Recordar Contraseña') }} </label>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow">{{ __('INICIAR SESION') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center misc-footer">
                        <p>Copyright &copy; </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
