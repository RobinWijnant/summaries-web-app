@extends('base')
@section('title', 'Samenvatting zoeken')

@section('content')
<div class="container my-5">
  <h2 class="mb-4">Samenvatting zoeken</h2>

  @include('common.errors')

  {!! Form::open(['route' => 'summaries.search', 'method' => 'GET', 'class' => 'clearfix', 'id' => 'searchFilters']) !!}
    <div class="float-left form-row">
      <div class="col-md-3 mb-1">
        {{ Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Zoek op titel', 'autocomplete' => 'off']) }}
      </div>
      <div class="col-md-3 mb-1">
        {{ Form::select('school', $schools, null, ['class' => 'form-control select2School']) }}
      </div>
      <div class="col-md-3 mb-1">
        {{ Form::select('education', $educations, null, ['class' => 'form-control select2Education']) }}
      </div>
      <div class="col-md-3 mb-1">
        {{ Form::select('course', $courses, null, ['class' => 'form-control select2Course']) }}
      </div>
    </div>
    <div class="float-right text-right">
      {{ Form::submit('Filter', ['class' => 'btn btn-primary']) }}
    </div>
  {!! Form::close() !!}

</div>

@include('summaries.partials.list')

@endsection