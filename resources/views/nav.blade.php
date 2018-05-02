@section('nav')
<nav class="navbar-expand-sm navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://www.freepnglogos.com/uploads/pepsi-png-logo/pepsi-png-logo-4.png" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerTest" aria-controls="navbarTogglerTest" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse right" id="navbarTogglerTest">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link mr-2" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-2" href="#">Samenvattingen</a>
            </li>
            <li class="nav-item"><span class="nav-link mr-2" href="#">|</span></li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="#">Login</a>
              </li>
            <li class="nav-item">
              <a class="btn btn-outline-primary btn-sm mt-1" href="#">Toevoegen</a>
            </li>
          </ul>
        </div>
    </div>
</nav>
@show