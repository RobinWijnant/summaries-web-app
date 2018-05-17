@extends('base')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Samenvatting uploaden</h2>

    @include('common.errors')

    {!! Form::open(['route' => 'summaries.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Titel') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Titel']) }}
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('school', 'School') }}
                {{ Form::select('school', $schools, null, ['class' => 'form-control select2School']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('education', 'Opleiding') }}
                {{ Form::select('education', $educations, null, ['class' => 'form-control select2Education']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('course', 'Vak') }}
                {{ Form::select('course', $courses, null, ['class' => 'form-control select2Course']) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('pdf', 'PDF-Bestand') }}
            {{ Form::file('pdf', ['class' => 'form-control-file']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Uploaden', ['class' => 'btn btn-primary mt-3']) }}
        </div>
    {!! Form::close() !!}

</div>
@endsection