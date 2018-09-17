@extends('layouts.app')

@section('content')

<!-- Card Light -->
<div class="row justify-content-center">

<!-- Card -->
@foreach($posts as $post)
    @foreach($post->images as $image)
<div class="card col-3 p-0 m-2">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top image-size" src="/final-project/FinalProject/public/posts/{{$image->image}}" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Button -->

  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fa fa-chevron-right pl-1 "></i></a>

  <!-- Card content -->
  
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title hidden">Card title</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">{{$post->caption}}</p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="fa fa-clock-o pr-1"></i>05/10/2015</li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-comments-o pr-1"></i>{{count($post->comments)}}</a></li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-thumbs-up pr-1"> </i>{{count($post->likes)}}</a></li>
      <li class="list-inline-item"><a href="#" class="white-text"><i class="fa fa-eye pr-1"> </i>{{count($post->vews)}}</a></li>
    </ul>
  </div>

</div>
    @endforeach           a
 @endforeach
<!-- Card -->

</div>
<!-- Card Light -->
            


@endsection
