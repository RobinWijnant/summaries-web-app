@extends('base')
@section('title', 'Mijn samenvattingen')

@section('content')
<div class="container my-5">
    @include('common.errors')
    <div class="clearfix my-5">
      <h2 class="mb-4 float-left">{{ $summary->name }}</h2>
      @can('summary.delete', $summary)
        {!! Form::open(['route' => ['summaries.destroy', $summary->id], 'method' => 'DELETE']) !!}
          {{ Form::submit('Verwijderen', ['class' => 'float-right btn btn-md btn-outline-danger']) }}
        {!! Form::close() !!}
      @endcan
      @can('summary.update', $summary)
        <a href="{{ route('summaries.edit', ['id' => $summary->id]) }}" class="mb-4 float-right btn btn-md btn-outline-primary mr-1">Wijzigen</a>
      @endcan
    </div>
    <div class="row">
      <div class="col-md-9">
        <object data="{{ \App\Helpers\Pdf::getPdfPath($summary) }}" type="application/pdf" class="w-100" height="600px">
          <embed src="{{ \App\Helpers\Pdf::getPdfPath($summary) }}" type="application/pdf" class="w-100" />
        </object>
      </div>
      <div class="col-md-3 container">
          <a href="{{ \App\Helpers\Pdf::getPdfPath($summary) }}" class="mb-4 btn btn-sm btn-secondary mr-1" target="_blanc">Openen in nieuw venster</a>
          <p class="card-title font-weight-bold">{{ $summary->name }}</p>
          <p class="card-subtitle"><i class="fas fa-chalkboard"></i> {{ $summary->course->name }}</p>
          <p class="card-subtitle"><i class="fas fa-graduation-cap"></i> {{ $summary->course->education->name }}</p>
          <p class="card-subtitle"><i class="fas fa-school"></i> {{ $summary->course->education->school->name }}</p>
          <p class="card-text">
              <span class="badge badge-secondary">Java</span>
              <span class="badge badge-secondary">MySQL</span>
          </p>
      </div>
    </div>
</div>

@endsection
