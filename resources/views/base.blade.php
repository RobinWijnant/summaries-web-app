<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="https://www.freepnglogos.com/uploads/pepsi-png-logo/pepsi-png-logo-4.png"/>
    <title>Summaries - @yield('title')</title>
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
  </head>

  <body>
    @include('nav')

    @yield('content')

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>&copy; 2018 </p>
      </div>
    </footer>
  <script src="{{ asset("js/app.js") }}"></script>
  </body>
</html>
