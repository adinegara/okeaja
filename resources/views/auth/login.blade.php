@extends('layouts.log')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> -->
                    <form method="POST" action="{{ route('login') }}">
                        <h3>Login</h3>
                        @csrf

                        <div class="form-group">

                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="mail@mail.com">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="*******">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                        </div>

                        <!-- <div class="form-group">
                             <div class="col-md-6 offset-md-4"> 
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                             </div> 
                        </div> -->

                        <div class="form-group offset-md-5">
                            <!-- <div class="col-md-8 "> -->
                                <button type="submit" class="btn btn-custom">
                                    {{ __('Login') }}
                                </button>

                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> 
                            </div> -->
                        </div>

                         <div class="form-group">
                            <!-- <div class="col-md-8 "> -->
                               <span>Belum punya akun? <a href="/register">Daftar disini!</a></span>
                                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> 
                            </div> -->
                        </div>

                        



                    </form>
                <!-- </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
