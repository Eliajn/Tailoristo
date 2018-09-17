@extends('layouts.app')

@section('content')
<main class="mdl-layout__content container register-center" >
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
