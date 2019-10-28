{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.customer')
        @section('content')
        <!-- Loging Area Start -->
        <div class="login-account section-padding">
           <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <form action="{{ route('login/post') }}" class="create-account-form" method="post">
                            <h2 class="heading-title">
                                CREATE AN ACCOUNT
                            </h2>
                            <p class="form-row">
                                <input type="email" placeholder="Email address">
                            </p>
                            <div class="submit">					
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        Create an account
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <form action="{{ route('login/post') }}" class="create-account-form" method="post">
                        @csrf
                            <h2 class="heading-title">
                                ALREADY RESIGTERED?
                            </h2>
                            <p class="form-row">
                                <input type="email" placeholder="Email address" name="email">
                            </p>
                            <p class="form-row">
                                <input type="password" placeholder="Password" name="password">
                            </p>
                            <p class="lost-password form-group">
                                <a href="#" rel="nofollow">Forgot your password?</a>
                            </p> 
                            <div class="submit">					
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        SING IN
                                    </span>
                                </button>
                            </div>                          
                       </form>
                    </div>
                </div>               
           </div>
        </div>
        <!-- Loging Area End -->
		@endsection