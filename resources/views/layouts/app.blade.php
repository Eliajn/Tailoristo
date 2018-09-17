<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="{{ asset('css/mdbootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/main.js') }}" defer></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Tailoristo</title>
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" style="background-image:  url('{{ asset('project_images/1.jpg') }}">
        <header class="mdl-layout__header ">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout__title">
                    <a class="anchor" href="{{ url('/') }}">Tailoristo</a>
                </span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                @guest
                    <a class="mdl-navigation__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="mdl-navigation__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @else
                    <a class="mdl-navigation__link" href="{{ url('/profile') }}">{{ Auth::user()->name }}</a>
                </nav>
                
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                  <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for="demo-menu-lower-right">
                  <li class="mdl-menu__item" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">log out</li> 
                </ul>

                <form hidden id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
            </div>
                <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                    <div class="mdl-tabs__tab-bar">
                        <a href="{{url('/')}}" class="mdl-layout__tab {{ Request::is('/') ? 'is-active' : '' }}">Feed</a>
                        <a href="{{url('/profile')}}" class="mdl-layout__tab {{ Request::is('profile') ? 'is-active' : '' }}">Profile</a>
                        <a href="{{url('/showposts')}}" class="mdl-layout__tab {{ Request::is('showposts') ? 'is-active' : '' }}">My Posts</a>
                        <a href="{{url('/post/store')}}" class="mdl-layout__tab {{ Request::is('post/store') ? 'is-active' : '' }}">Add post</a>
                        <a href="{{url('/messages')}}" class="mdl-layout__tab {{ Request::is('messages') ? 'is-active' : '' }}">Messages</a>
                    </div>
                </div>
            @endguest
        </header>

        <main class="container">
            @yield('content')
        </main>
    </div>
    </script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>




    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
            
    
</body>
</html>
