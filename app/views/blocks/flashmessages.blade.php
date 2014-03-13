<!-- will be used to show any messages -->
@if (Session::has('message'))
  <div class="row">
    <div class="large-12 columns">
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    </div>
  </div>
@endif