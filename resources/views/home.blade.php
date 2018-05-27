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
<div class="py-5">
  <div class="container">
    <div class="row">
      
      @forelse ($recentSummaries as $summary)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-img-top recentSummaryImg" style="background-image:url('{{ asset('img/thumbs/'.$summary->user->id.'/'.$summary->id.'_'.$summary->name.'.jpg') }}')" alt="Thumbnail {{ $summary->name }}">
            </div>
            <div class="card-body">
              <p class="card-title font-weight-bold">{{ $summary->name }}</p>
              <p class="card-subtitle"><i class="fas fa-chalkboard"></i> {{ $summary->course->name }}</p>
              <p class="card-subtitle"><i class="fas fa-graduation-cap"></i> {{ $summary->course->education->name }}</p>
              <p class="card-subtitle"><i class="fas fa-school"></i> {{ $summary->course->education->school->name }}</p>
              <p class="card-text">
                <span class="badge badge-secondary">Java</span>
                <span class="badge badge-secondary">MySQL</span>
              </p>
              <div class="d-flex justify-content-between align-items-center">
              <a class="btn btn-sm btn-outline-secondary" href="/summaries/{{ $summary->id }}">Bekijken</a>
                <small class="text-muted">{{ Carbon\Carbon::parse($summary->created_at)->diffForHumans() }}</small>
              </div>
            </div>
          </div>
        </div>
      @empty
          <p>No recent summaries found</p>
      @endforelse
      
    </div>
  </div>
</div>
@endsection