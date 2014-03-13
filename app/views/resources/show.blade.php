@extends('layouts.admin')

@section('title')
<h1>Show Resource</h1>
@stop

@section('content')
{{ HTML::ul($errors->all()) }}
  <div class="jumbotron text-center">
    <h2>{{ $resource->name }}</h2>
    <p>
      <strong>Email:</strong> {{ $resource->email }}<br>
      <strong>Skill:</strong> {{ $resource->skill }}
    </p>
  </div>


</div>
@stop