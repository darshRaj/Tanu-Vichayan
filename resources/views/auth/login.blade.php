<!DOCTYPE html>
<html lang="en">
<head>
        @include('layouts.head')
</head>

<body class="hm-gradient">

    <!--Navbar -->
    <nav class="mb-4 navbar navbar-expand-lg navbar-dark red darken-2">
        <a class="navbar-brand font-bold mob_75" href="{{url('vichayan')}}">
            <img src="{{ asset('custom/images/logo.png')}}" class="navbar_logo" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
    </nav>
    <!--/.Navbar -->



    <div class="bg_manage">
        <div class="container">
            <div class="main_bg">
                <div class="row">
                    <div class="col-md-3">
                        <div class="signin-first">
                            <div class="signin_h4">
                                <a href="{{url('auth.login')}}" class="signup_clr">Sign In</a>
                            </div>
                            <div class="signup_a ">
                                <a href="{{url('auth.register')}}" class="signup_clr">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="img-rectangle"></div>
                        <div class="signin-img">
                            <img src="{{asset('custom/images/logo_center.png')}}" class="logo_center" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="signin-form">
                            <h1>Sign In</h1>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <div class="form-group row">                            
                            <div class="col-md-12">
                                <input 
                                    id="email" 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" 
                                    required autocomplete="email"
                                    placeholder="Email / Mobile No" 
                                    autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input 
                                    id="password" 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    placeholder="Passord"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                                
                            </form>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text_right">
                                        <a href="{{url('auth.register')}}" class="sing_up">Sign Up</a>
                                        <p class="account">If you don't have account with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

