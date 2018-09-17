@extends('layouts.app')

@section('content')
<div class="mdl-grid">
    @foreach ($posts as $keyy=>$post)       
        <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-shadow--16dp ">
          
            <figure class="mdl-card__media">
              <div id="carousel-example-{{$keyy}}" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
                <ol class="carousel-indicators">
                  @foreach($post->images as $key=>$im)
                    <li data-target="#carousel-example-1z" data-slide-to="{{$key}}" @if($key == 0)class="active"@endif></li>
                  @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">
                  <!--First slide-->
                  @foreach($post->images as $key=>$image)
                  <div class="carousel-item @if($key==0)active @endif">
                      <img class="d-block w-100 image-size" alt="photo" src="{{ asset('posts/' . $image->image) }}">
                  </div>
                  @endforeach
                </div>

                <a class="carousel-control-prev" href="#carousel-example-{{$keyy}}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-{{$keyy}}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
      <!--/.Controls-->
              </div>
            </figure>
            
          <div class="mdl-card__title hidden">
            <h1 class="mdl-card__title-text hidden"></h1>
          </div>
          <div class="mdl-card__supporting-text">
            <p>{{$post->caption}}</p>
          </div>
          <!-- <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect ">View Post</a>
            <div class="mdl-layout-spacer"></div>
            <button class="mdl-button mdl-button--icon mdl-button--colored"><i class="material-icons">favorite</i></button>
            <button class="mdl-button mdl-button--icon mdl-button--colored"><i class="material-icons">share</i></button>
          </div> -->
        </div>
    @endforeach   
</div>
@endsection




