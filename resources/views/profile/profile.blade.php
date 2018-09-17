
@extends('layouts.app')

@section('content')

<!-- Card Regular -->
<div class="card card-cascade col-lg-8 mx-auto card-profile-margin">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top mt-1" alt="Card image cap" src="{{ asset('profilepic/' . $profile->photo->image) }}" width="500" height="500">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>{{$profile->nickname}}</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">{{$profile->title}}</h6>
    <!-- Text -->
    <p class="card-text">{{$profile->biography}}
    </p>

    <!-- Facebook -->
    <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
    <!-- Twitter -->
    <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
    <!-- Google + -->
    <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

  </div>

</div>
<!-- Card Regular -->
            



@endsection
