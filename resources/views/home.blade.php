@extends('layouts.app')

@section('content')

<!-- Card Light -->



<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item margin-page" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators carousel-indicators-margin">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active" >
          @foreach($profiles as $key=>$profile)
            @if($key == 0)
            <div class="col-md-4 float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2">
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                            @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @foreach($profiles as $key=>$profile)
            @if($key == 1)
            <div class="col-md-4 clearfix d-none d-md-block float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2"> 
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                        @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            @foreach($profiles as $key=>$profile)
            @if($key == 2)
            <div class="col-md-4 clearfix d-none d-md-block float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2">

                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                        @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            @foreach($profiles as  $key=>$profile)
            @if($key == 3)
            <div class="col-md-4 float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2">
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                        @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @foreach($profiles as $key=>$profile)
            @if($key == 4)
            <div class="col-md-4 clearfix d-none d-md-block float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2">
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                        @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                        @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @foreach($profiles as $key=>$profile)
            @if($key == 5)
            <div class="col-md-4 clearfix d-none d-md-block float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2">
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                          @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            @foreach($profiles as $key=>$profile)
            @if($key == 6)
            <div class="col-md-4 float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2">
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                        @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @foreach($profiles as $key=>$profile)
            @if($key == 7)
            <div class="col-md-4 clearfix d-none d-md-block float-left appendFollow card-profile-height" id="{{$profile->photo->user_id}}">
                <div class="card mb-2">
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                        @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @foreach($profiles as $key=>$profile)
            @if($key == 8)
            <div class="col-md-4 clearfix d-none d-md-block float-left appendFollow card-profile-height" id="{{$profile->user_id}}">
                <div class="card mb-2">
                    <img class="card-img-top image-size" src="{{ asset('profilepic/' . $profile->photo->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$profile->nickname}}</h4>
                        <p class="card-text">{{$profile->biography}}</p>
                        <a class="btn btn-primary follow">
                        @if($profile->follow($profile->user_id))
                            followed
                            @else
                            follow
                            @endif
                          </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <!--/.Third slide-->

    </div>
    <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
<br>
<hr>
<br>
<div class="row justify-content-center">

<!-- Card -->
@foreach($posts as $keyy=>$post)
<div class="card  card-width  p-0 m-3">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top image-size"  alt="Card image cap" src="{{ asset('posts/' . $post->images[0]->image) }}">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Button -->
  <!-- id="{{$post->id}}" onClick="postFun(this.id);" -->
    <a  class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3" data-toggle="modal" data-target="#{{$keyy}}"><i class="fa fa-chevron-right pl-1 View"></i></a>
  

  <!-- Card content -->
  
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title ">
        @if($post->user->profile)
                {{$post->user->profile->nickname}}
        @endif
    </h4>
    <hr>
    <!-- Text -->
    <p class="card-text">{{$post->caption}}</p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text hidden"><i class="fa fa-clock-o pr-1"></i>05/10/2015 </li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-comments-o pr-1"></i>{{count($post->comments)}}</a></li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-thumbs-up pr-1"> </i>{{count($post->likes)}}</a></li>
      <li class="list-inline-item"><a href="#" class="white-text"><i class="fa fa-eye pr-1"> </i>{{count($post->vews)}}</a></li>
    </ul>
  </div>

</div>


<div class="modal fade" id="{{$keyy}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header hidden">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mdl-card modal-card-size">
          
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
                              <img class="d-block w-100 image-size" src="{{ asset('posts/' . $image->image) }}" alt="photo">
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
                   <div class="mdl-card__actions mdl-card--border">
                     <!-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect hidden">View Post</a> -->
                     <div class="mdl-layout-spacer"></div>
                     @if($post->like(AUTH::user()->id))
                         <div class="row">
                             <button class="mdl-button mdl-button--icon mdl-button--colored ml-4">
                             <i  data-post-id="{{$post->id}}" class="float-left material-icons likeIcon colorred">favorite</i></button><p class="ml-2 mt-1"><span class="like-change">{{count($post->likes)}}</span> likes</p>
                         </div>
                    @else
                        <div class="row">
                            <button class="mdl-button mdl-button--icon mdl-button--colored ml-4">
                              <i  data-post-id="{{$post->id}}" class="material-icons likeIcon colorblack">favorite</i></button><p class="ml-2 mt-1"><span class="like-change">{{count($post->likes)}}</span> likes</p>
                        </div>
                    @endif
                </div>
              </div>
            </div>
            <div class="modal-footer flexrow">
                <div id="comments{{$post->id}}" data-post-id="{{$post->id}}" class="col-sm-10 p-0 appendComment">
                  @foreach($post->comments as $comment)
                  <div class="display-flex mb-1">
                  <b class="bold mr-3">{{$comment->user->name}}</b>
                  <p class="mb-1">{{$comment->comment}}</p>
                  </div>
                  @endforeach
                </div>
                <textarea class="form-control comment" id="comment" name="comment" rows="2" placeholder="Add comment"></textarea>
                <button class="btn btn-secondary commentButton"  name="post">comment</button>
        </div>
    </div>
</div>
</div>
               
 @endforeach
<!-- Card -->


<script type="text/javascript">
  var csrf_token = '{{ csrf_token() }}';
  var likeUrl = "{{route('likeUpdate')}}";
  var commentUrl = "{{route('commentStore')}}";
  var userName = "{{AUTH::user()->name}}";
  var followUrl = "{{route('followUpdate')}}";
</script>
<script src="{{asset('js/comment.js')}}"></script>
<script src="{{asset('js/follow.js')}}"></script>
</div>
<!-- Card Light -->
            


@endsection
