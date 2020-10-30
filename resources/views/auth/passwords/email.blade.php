@extends('ducor::layouts.auth')

@section('content')


<div class="misc-wrapper">
    <div class="misc-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-sm-12">
                    <div class="misc-box">

                        <h3 class="text-center"><small>{{ __('Reset Password') }}</small></h3>
                        <div class="alert alert-info">
                            <p class="">Enter your e-mail below and we will send you reset instructions!</p>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form role="form" method="post" action="{{ route('password.email') }}">
                        @csrf
                            <div class="form-group group-icon @error('email') has-error @enderror">
                                <input id="emailid" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="icon-envelope text-muted icon-input"></span>
                                @error('email')
                                    <em id="email-error" class="error help-block">{{ $message }}</em>
                                @enderror
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="btn btn-block btn-rounded box-shadow btn-primary"> {{ __('Send Password Reset Link') }}</button>
                            </div>

                            <hr/>            
                            <p class=" text-center">Have an account?</p>
                            <a href="{{ route('login') }}" class="btn btn-block btn-success btn-rounded box-shadow">Login</a>
                        </form>
                    </div>
                    <div class="text-center misc-footer">
                            <p>Copyright &copy; 2018 FixedPlus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
