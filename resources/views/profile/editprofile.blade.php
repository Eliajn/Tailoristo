



@extends('layouts.app')

@section('content')
<div class="mdl-tabs__panel register-center">
    <div class="mdl-grid">
        <div class="mdl-cell--6-col-desktop">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white"><h2 class="mdl-card__title-text">My Profile</h2></div>
                <div class="card-body m-auto">
                  <form class="form" method="POST" enctype="multipart/form-data" action="{{ url('/profile/createprofile')}} ">
                     @csrf   
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="email" name="nickname" class="mdl-textfield__input" type="text" id="input_profile">
                            <label class="mdl-textfield__label" for="input_profile">Name</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="email" name="title" class="mdl-textfield__input" type="text" id="input_profile">
                            <label class="mdl-textfield__label" for="input_profile">Title</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="email" name="biography" class="mdl-textfield__input" type="text" id="input_profile">
                            <label class="mdl-textfield__label" for="input_profile">Biography</label>
                        </div>
                        <input class="margin-button-add" type="file" name="image">
                        
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent m-auto">
                          Add
                        </button>
                         @if(count($errors))
                            @foreach($errors as $error)
                            <li>$error</li>
                            @endforeach
                        @endif
                    </form>
                   
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
