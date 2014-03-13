@extends('layouts.admin')

@section('title')
<h1>Edit Resource</h1>
@stop

@section('content')
{{ HTML::ul($errors->all()) }}

{{ Form::model($resource, array('route' => array('resources.update', $resource->id), 'method' => 'PUT')) }}

  
  <div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('skill', 'Skill') }}
    {{ Form::select('skill', array('0' => 'Select a Skill', '1' => 'BACKEND', '2' => 'FRONTEND'), Input::old('skill'), array('class' => 'form-control')) }}
  </div>

  {{ Form::submit('Edit the Resource!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop