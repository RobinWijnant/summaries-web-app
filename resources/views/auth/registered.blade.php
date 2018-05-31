@extends('base')
@section('title', 'Mijn samenvattingen')

@section('content')
<div class="container">
  @if (session('success'))
    @component('common.success')
      {{ session('success') }}
    @endcomponent
  @endif
</div>
<div class="container my-5">
    @include('common.errors')
    <div class="clearfix">
        <h2 class="mb-4 float-left">Mijn samenvattingen</h2>
    </div>
</div>

@include('summaries.partials.list')

@endsection