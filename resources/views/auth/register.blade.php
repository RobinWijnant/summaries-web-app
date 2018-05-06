@extends('base')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Registreren</h2>

    @include('common.errors')

    {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
        <div class="form-row">
            <div class="form-group col-md-3">
                {{ Form::label('firstname', 'Voornaam') }}
                {{ Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Voornaam']) }}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('lastname', 'Achternaam') }}
                {{ Form::text('lastanem', '', ['class' => 'form-control', 'placeholder' => 'Achternaam']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('email', 'E-mailadres') }}
                {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'E-mailadres']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                {{ Form::label('password', 'Wachtwoord') }}
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Wachtwoord']) }}
            </div>
            <div class="form-group col-md-3">
                {{ Form::label('password_confirmation', 'Wachtwoord bevestigen') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Wachtwoord']) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::submit('Registreren', ['class' => 'btn btn-primary mt-3']) }}
        </div>
    {!! Form::close() !!}
</div>
@endsection
