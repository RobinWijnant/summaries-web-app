@if (count($errors) > 0)

  <div class="alert alert-danger" role="alert">
    <strong>Oeps! Er klopt iets niet.</strong>
    <hr>
    <ul class="alert__list">

      @foreach ($errors->all() as $error)
        <li>{{ ucfirst($error) }}</li>
      @endforeach

    </ul>
  </div>

@endif