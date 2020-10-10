<!DOCTYPE html>
<html lang="en">
<head>
        @include('layouts.head')
</head>

<body class="hm-gradient">

    <!--Navbar -->
    <nav class="mb-4 navbar navbar-expand-lg navbar-dark red darken-2">
        <a class="navbar-brand font-bold mob_75" href="{{url('vichayan')}}">
            <img src="{{asset('custom/images/logo.png')}}" class="navbar_logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!--/.Navbar -->
    
<div class="container">
<div class="main_bg">
<div class="row">
    <div class="col-md-3">
        <div class="signin-first">
            <div class="signup_a">
                <a href="{{url('auth.login')}}" class="signin">Sign In</a>
            </div>
            <div class=" signin_h4">
                <a href="{{url('auth.register')}}" class="signup">Sign Up</a>
            </div>
        </div>
    </div>
    <div class="col-md-3  desktop">
        <div class="signin-img2">
        </div>
        <div class="img-rectangle2">
            <img src="{{asset('custom/images/logo_center.png')}}" class="signup_logo" />
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="signin-form-signup" style="padding:0px;">
            <h1>Create An Account</h1>
            <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row row desktop" style="width:87%">
                
                    <div class="col-md-6">
                        <input 
                            id="firstname" 
                            type="text" 
                            class="form-control @error('firstname') is-invalid @enderror" 
                            name="firstname" 
                            value="{{ old('firstname') }}" 
                            required autocomplete="firstname"
                            placeholder="First Name" 
                            style="width:100%;outline:none;"
                        autofocus>

                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                      
                    </div>

                    <div class="col-md-6">
                        <input 
                            id="lastname" 
                            type="text" 
                            class="form-control @error('lastname') is-invalid @enderror" 
                            name="lastname" 
                            value="{{ old('lastname') }}" 
                            required autocomplete="lastname"
                            placeholder="Last Name" 
                            style="width:100%;outline:none;"
                        autofocus>
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                    <input 
                        id="email" 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        name="email" 
                        value="{{ old('email') }}"
                        placeholder="Email Address" 
                        required autocomplete="email">

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
                        placeholder="Password" 
                        required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input 
                        id="password-confirm" 
                        type="password" 
                        class="form-control" 
                        name="password_confirmation" 
                        placeholder="Confrim Password"
                        required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input 
                        id="mobile" 
                        type="number" 
                        class="form-control @error('mobile') is-invalid @enderror"
                        name="mobile" 
                        placeholder="Enter Mobile"
                        required autocomplete="mobile">
                        
                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input 
                        id="dob" 
                        type="date" 
                        class="form-control @error('dob') is-invalid @enderror" 
                        name="dob" 
                        required autocomplete="dob">
                    </div>
                </div>


                <p>By clicking Sign up. You agree to our term, Data Policy and cookie policy, You may receive SMS notifications from us can opt out at any time.</p>
                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-0">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                
            </form>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text_right3">
                    <a href="{{url('auth.login')}}" class="sin_up">Sign In</a>
                    <p class="account">If you have already have account with us.</p>
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

