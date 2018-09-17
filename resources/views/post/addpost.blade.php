@extends('layouts.app')

@section('content')



<main class="mdl-layout__content container register-center" >
    <div class="page-content">
        <div class="mdl-cell--6-col-desktop">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white"><h2 class="mdl-card__title-text">Add Post</h2></div>
                <div class="card-body m-auto">
                    <form class="form" enctype="multipart/form-data" method='POST' action='{{url("/post/store/")}}' >
                        {{ csrf_field() }} 
                        <input class="" type="file" name="image[]" multiple required>
                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input id="caption" name="caption" class="mdl-textfield__input" type="text" id="caption" required autofocus>
                            <label class="mdl-textfield__label" for="caption">Caption</label>
                        </div>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent m-auto">
                          Add
                        </button>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</main>


@endsection


