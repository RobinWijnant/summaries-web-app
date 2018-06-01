@extends('base')
@section('title', 'Mijn samenvattingen')

@section('content')
<div class="container my-5">
    @include('common.errors')
    <div class="clearfix my-5">
      <h2 class="pageTitle">{{ $summary->name }}</h2>
      <div class="titleBtns">
        @can('summary.delete', $summary)
          {!! Form::open(['route' => ['summaries.destroy', $summary->id], 'method' => 'DELETE', 'class' => 'd-inline-block']) !!}
            {{ Form::submit('Verwijderen', ['class' => 'btn btn-md btn-outline-danger']) }}
          {!! Form::close() !!}
        @endcan
        @can('summary.update', $summary)
          <a href="{{ route('summaries.edit', ['id' => $summary->id]) }}" class="btn btn-md btn-outline-primary mr-1 d-inline-block">Wijzigen</a>
        @endcan
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <object id="pdfPreview" data="{{ \App\Helpers\Pdf::getPdfPath($summary) }}" type="application/pdf" class="w-100">
          <embed src="{{ \App\Helpers\Pdf::getPdfPath($summary) }}" type="application/pdf" class="w-100" />
        </object>
      </div>
      <div class="col-md-3 container" id="summaryDetails">
          <a href="{{ \App\Helpers\Pdf::getPdfPath($summary) }}" class="mb-4 btn btn-sm btn-secondary mr-1" target="_blanc">Openen in nieuw venster</a>
          <p class="card-title font-weight-bold">{{ $summary->name }}</p>
          <p class="card-subtitle my-1"><i class="fas fa-chalkboard"></i> {{ $summary->course->name }}</p>
          <p class="card-subtitle my-1"><i class="fas fa-graduation-cap"></i> {{ $summary->course->education->name }}</p>
          <p class="card-subtitle my-1"><i class="fas fa-school"></i> {{ $summary->course->education->school->name }}</p>
          {{-- <p class="card-text my-1">
              <span class="badge badge-secondary">Java</span>
              <span class="badge badge-secondary">MySQL</span>
          </p> --}}
      </div>
    </div>
</div>

@endsection
