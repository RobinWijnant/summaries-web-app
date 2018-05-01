<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="https://www.freepnglogos.com/uploads/pepsi-png-logo/pepsi-png-logo-4.png"/>
    <title>Find summaries</title>
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
  </head>

  <body>
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

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Vind samenvattingen van jouw vakken</h1>
        <p class="lead text-muted">De beste documenten gedeeld door jouw medestudenten, geordend op één plek.</p>
        <form action="" method="GET" class="mt-5 mx-auto" id="searchbar">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Zoek naar documenten, vakken, opleidingen..." aria-label="Large" aria-describedby="searchbarInput">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary" id="searchbarInput"><i class="fa fa-search text-white"></i></span>
            </div>
          </div>
        </form>
      </div>
    </section>
    <h3 class="pt-4 text-center">Recent toegevoegde samenvattingen</h3>
    <div class="py-5">
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">
                    <p class="font-weight-bold">Naam van de samenvatting</p>
                    <p class="badge badge-secondary">Java</p>
                    <p class="badge badge-secondary">MySQL</p>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Bekijken</button>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>


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
