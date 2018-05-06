@extends('base')

@section('nav')
@endsection

@section('content')
<div class="container login__wrapper">
    {!! Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'login__form']) !!}
        <img class="mb-4" src="https://www.freepnglogos.com/uploads/pepsi-png-logo/pepsi-png-logo-4.png" alt="" width="50" height="50">
        <h1 class="h4 mb-4 font-weight-normal">Aanmelden</h1>
        @include('common.errors')
        {{ Form::email('email', '', ['class' => 'form-control mt-3', 'placeholder' => 'E-mailadres']) }}
        {{ Form::password('password', ['class' => 'form-control mt-2', 'placeholder' => 'Wachtwoord']) }}
        <div class="checkbox my-3 text-left">
            <label>
            {{ Form::checkbox('remember-me', 'remember-me') }} Remember me
            </label>
        </div>
        {{ Form::submit('Aanmelden', ['class' => 'btn btn-primary float-right']) }}
        <a class="link float-left pt-2" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
    {!! Form::close() !!}
</div>
@endsection

@section('footer')
@endsection
