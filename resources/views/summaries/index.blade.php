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
    <h2 class="mb-4">Mijn samenvattingen</h2>
    
    @include('common.errors')
    @include('summaries.partials.list')

</div>
@endsection
