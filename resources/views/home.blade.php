@extends('base')

@section('content')
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
@endsection