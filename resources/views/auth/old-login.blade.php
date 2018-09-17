@extends('layouts.app')

@section('content')







<div class="row justify-content-center" style="margin-top: 150px;">
    <div class="col-4">
<!-- Default form login -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <p class="h4 text-center mb-4">Sign in</p>

        <!-- Default input email -->
        <label for="defaultFormLoginEmailEx" class="grey-text">Your email</label>
        <input type="email" id="defaultFormLoginEmailEx" name="email" class="form-control" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

        <br>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <!-- Default input password -->
        <label for="defaultFormLoginPasswordEx" class="grey-text">Your password</label>
        <input type="password" id="defaultFormLoginPasswordEx" class="form-control" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <div class="text-center mt-4">
            <button class="btn btn-indigo" type="submit">Login</button>
        </div>
    </form>                      
    </div>
</div>


<main class="mdl-layout__content container">
    <div class="page-content">
        <div class="mdl-cell--6-col-desktop">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white"><h2 class="mdl-card__title-text">{{ __('Login') }}</h2></div>
                <div class="card-body m-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf   
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="email" name="email" class="mdl-textfield__input" type="email" id="sample3" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
                            <label class="mdl-textfield__label" for="sample3">{{ __('E-Mail Address') }}</label>
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="sample3" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label class="mdl-textfield__label" for="sample3">{{ __('Password') }}</label>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                          <input type="checkbox" id="checkbox-2" name="remember" class="mdl-checkbox__input" {{ old('remember') ? 'checked' : '' }}>
                          <span class="mdl-checkbox__label">{{ __('Remember Me') }}</span>
                        </label>
                        <div class="mdl-card__actions mdl-card--border">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                              {{ __('Login') }}
                            </button>
                            <a class="anchor" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</main>
@endsection
