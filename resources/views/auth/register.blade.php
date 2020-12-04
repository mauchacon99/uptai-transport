@extends('admin.auth')

@section('content')

<div class="misc-wrapper">
    <div class="misc-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-sm-12">
                    <div class="misc-header text-center">
                        <img alt="{{ __('Register') }}" src="{{ asset('admin/img/icon.png') }}" class="logo-icon margin-r-10">
                        <img alt="{{ __('Register') }}" src="{{ asset('admin/img/logo-dark.png') }}" class="toggle-none hidden-xs">
                    </div>
                    <div class="misc-box">   
                            <p class="text-center">Sign up to get instant access.</p>
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group  @error('name') has-error @enderror">
                                <label for="name">{{ __('Nombres y Apellidos') }}</label>
                                <div class="group-icon">
                                    <input id="name"  class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <span class="icon-envelope text-muted icon-input"></span>
                                    @error('name')
                                        <em id="name-error" class="error help-block">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group  @error('email') has-error @enderror">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <div class="group-icon">
                                    <input id="email"  class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="icon-envelope text-muted icon-input"></span>
                                    @error('email')
                                        <em id="email-error" class="error help-block">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group group-icon  @error('password') has-error @enderror">
                                <label for="password">{{ __('Password') }}</label>
                                <div class="group-icon">
                                    <input id="password" type="password"  class="form-control"  name="password" required autocomplete="new-password">
                                    <span class="icon-lock text-muted icon-input"></span>
                                    @error('password')
                                        <em id="password-error" class="error help-block">{{ $message }}</em>
                                    @enderror
                                </div>
                            </div>
                                <div class="form-group group-icon @error('password') has-error @enderror">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <div class="group-icon">
                                    <input id="password-confirm" type="password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <span class="icon-lock text-muted icon-input"></span>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="checkbox checkbox-primary margin-r-5">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <label for="checkbox2"> I Agree with Terms <a href="#">Terms</a> </label>
                                        @error('name')
                                            <em id="remember-error" class="error help-block">{{ $message }}</em>
                                        @enderror
                                    </div> 
                                </div>
                            </div>
                                <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow mt-10">{{ __('Register') }}</button>
                            <hr>
                            
                            <p class=" text-center">Have an account?</p>
                            <a href="{{ route('login') }}" class="btn btn-block btn-success btn-rounded box-shadow">Login</a>
                        </form>
                    </div>
                    <div class="text-center">
                            <p>Copyright &copy; 2018 FixedPlus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
