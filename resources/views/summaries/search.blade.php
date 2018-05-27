@extends('base')

@section('content')
<div class="container">
  @if (session('success'))
    @component('common.success')
      {{ session('success') }}
    @endcomponent
  @endif
</div>
<div class="container my-5">
  <h2 class="mb-4">Samenvatting zoeken</h2>

  @include('common.errors')

  {!! Form::open(['route' => 'summaries.search', 'method' => 'GET']) !!}
      {{ Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Zoek samenvattingen', 'autocomplete' => 'off']) }}
      {{ Form::select('school', $schools, null, ['class' => 'form-control select2School']) }}
      {{ Form::select('education', $educations, null, ['class' => 'form-control select2Education']) }}
      {{ Form::select('course', $courses, null, ['class' => 'form-control select2Course']) }}
      {{ Form::submit('Filter', ['class' => 'btn btn-primary mt-3']) }}
  {!! Form::close() !!}

  <ul>
  @foreach ($summaries as $summary)
    
      <li>{{ print_r($summary) }}</li>
    
  @endforeach
  </ul>

</div>
@endsection