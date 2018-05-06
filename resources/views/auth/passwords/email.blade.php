@extends('base')

@section('content')
<div class="container my-5">
    <h2 class="mb-2">Wachtwoord resetten</h2>
    <p class="mb-4">Als het opgegeven emailadres geregistreerd is, wordt er een email verstuurd.</p>

    @include('common.errors')

    {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('email', 'E-mailadres') }}
            {{ Form::email('email', '', ['class' => 'form-control col-md-6', 'placeholder' => 'E-mailadres']) }}
        </div>
        <div class="form-group mb-5">
            {{ Form::submit('Wachtwoord resetten', ['class' => 'btn btn-primary mt-3']) }}
        </div>
    {!! Form::close() !!}

@endsection
