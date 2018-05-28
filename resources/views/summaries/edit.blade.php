@extends('base')
@if(isset($summary))
    @section('title', 'Edit')
@else
    @section('title', 'Create')
@endif

<?php
    $sName = $summary->name ?? null;
    $sSchool = $summary->course->education->school->id ?? null;
    $sEducation = $summary->course->education->id ?? null;
    $sCourse = $summary->course->id ?? null;
?>

@section('content')
<div class="container my-5">
    @if(isset($summary))
        <h2 class="mb-4">Samenvatting bewerken</h2>
    @else
        <h2 class="mb-4">Samenvatting uploaden</h2>
    @endif
    

    @include('common.errors')

    {!! Form::open(['route' => 'summaries.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Titel') }}
            {{ Form::text('name', $sName, ['class' => 'form-control', 'placeholder' => 'Titel']) }}
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('school', 'School') }}
                {{ Form::select('school', $schools, $sSchool, ['class' => 'form-control select2School']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('education', 'Opleiding') }}
                {{ Form::select('education', $educations, $sEducation, ['class' => 'form-control select2Education']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('course', 'Vak') }}
                {{ Form::select('course', $courses, $sCourse, ['class' => 'form-control select2Course']) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('pdf', 'PDF-Bestand') }}
            {{ Form::file('pdf', ['class' => 'form-control-file']) }}
        </div>
        <div class="form-group">
            @if(isset($summary))
                {{ Form::submit('Opslaan', ['class' => 'btn btn-primary mt-3']) }}
                <a href="{{ route('summaries.index') }}" class="btn btn-secondary mt-3">Annuleren</a>
            @else
                {{ Form::submit('Uploaden', ['class' => 'btn btn-primary mt-3']) }}
            @endif
        </div>
    {!! Form::close() !!}

</div>
@endsection