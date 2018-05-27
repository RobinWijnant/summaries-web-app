@extends('base')
@section('title', 'Home')

@section('content')
<section class="jumbotron text-center">
<div class="container">
  <h1 class="jumbotron-heading">Vind samenvattingen van jouw vakken</h1>
  <p class="lead text-muted">De beste documenten gedeeld door jouw medestudenten, geordend op één plek.</p>
  {!! Form::open(['route' => 'summaries.search', 'method' => 'GET', 'id' => 'searchbar', 'class' => 'mt-5 mx-auto']) !!}
    <div class="input-group input-group-lg">
      {{ Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Zoek naar documenten of samenvattingen', 'aria-label' => 'Large', 'aria-describedby' => 'searchbarInput', 'autocomplete' => 'off']) }}
      <div class="input-group-prepend">
          <span class="input-group-text bg-primary" id="searchbarInput"><i class="fa fa-search text-white"></i></span>
      </div>
    </div>
  {!! Form::close() !!}
</div>
</section>
<h3 class="pt-4 text-center">Recent toegevoegde samenvattingen</h3>
@include('summaries.partials.list')
@endsection