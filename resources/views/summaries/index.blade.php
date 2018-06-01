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
        <h2 class="pageTitle">Mijn samenvattingen</h2>
        <div class="titleBtns">
          <a href="{{ route('summaries.create') }}" class="btn btn-md btn-primary">Nieuwe samenvatting</a>
        </div>
    </div>
</div>

@include('summaries.partials.list')

@endsection
