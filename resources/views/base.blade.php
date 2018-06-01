<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="https://www.freepnglogos.com/uploads/pepsi-png-logo/pepsi-png-logo-4.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Summaries - @yield('title')</title>
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
  </head>

  <body>
    @section('nav')
    <nav class="navbar-expand-md navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="https://www.freepnglogos.com/uploads/pepsi-png-logo/pepsi-png-logo-4.png" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerTest" aria-controls="navbarTogglerTest" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse right" id="navbarTogglerTest">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
              <a class="nav-link mr-2" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'summaries.search' ? 'active' : '' }}">
              <a class="nav-link mr-2" href="{{ route('summaries.search') }}">Samenvattingen</a>
            </li>
            <li class="nav-item navSeparator"><span class="nav-link mr-2" href="#">|</span></li>

            @if (Auth::check())
              <li class="nav-item {{ Route::currentRouteName() == 'summaries.index' ? 'active' : '' }}">
                  <a class="nav-link mr-3" href="{{ route('summaries.index') }}">Mijn samenvattingen</a>
                </li>
              <li class="nav-item">
                {!! Form::open(['route' => 'logout', 'method' => 'POST']) !!}
                  {{ Form::submit('Uitloggen', ['class' => 'nav-link logout']) }}
                {!! Form::close() !!}
              </li>
            @else
              <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                  <a class="nav-link mr-3" href="{{ route('login') }}">Login</a>
                </li>
              <li class="nav-item">
                <a class="btn btn-outline-primary btn-sm mt-1" href="{{ route('register') }}">Registreren</a>
              </li>
            @endif

          </ul>
        </div>
      </div>
    </nav>
    @show
    
    @yield('content')
    
    @section('footer')
    <footer class="text-muted container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <p class="float-left">&copy; 2018 </p>
    </footer>
    @show
  <script src="{{ asset("js/app.js") }}"></script>
  </body>
</html>
