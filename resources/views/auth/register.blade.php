@extends('layouts.app')

@section('content')




<div class="mdl-layout__content register-center style="margin-top:40px">
    <div class="mdl-grid ">
        <div class="mdl-cell--8-col-desktop">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white"><h2 class="mdl-card__title-text">{{ __('Register') }}</h2>
                </div>
                <div class="card-body m-auto">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        @csrf   
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="name" name="name" class="mdl-textfield__input" type="text" id="sample3" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
                            <label class="mdl-textfield__label" for="sample3">Name</label>
                        </div>
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

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm" class="mdl-textfield__label" >{{ __('Confirm Password') }}</label>
                            </div>


                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                              <input type="radio" id="option-1" class="mdl-radio__button" name="role" value="designer" checked>
                              <span class="mdl-radio__label">Designer</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                              <input type="radio" id="option-2" class="mdl-radio__button" name="role" value="user">
                              <span class="mdl-radio__label">User</span>
                        </label><br>
                        <div class="mdl-card__actions mdl-card--border">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent ">
                          {{ __('register') }}
                        </button>
                    </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>





@endsection
