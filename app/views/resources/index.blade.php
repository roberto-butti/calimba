@extends('layouts.admin')

@section('title')
<h1>All the Resources</h1>
@stop

@section('content')
<table>
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Email</td>
      <td>Skill</td>
      <td>Actions</td>
    </tr>
  </thead>
  <tbody>
  @foreach($resources as $key => $value)
    <tr>
      <td>{{ $value->id }}</td>
      <td>{{ $value->name }}</td>
      <td>{{ $value->email }}</td>
      <td>{{ $value->skill }}</td>

      <!-- we will also add show, edit, and delete buttons -->
      <td>
        <a href="#" class="button split tiny">This Resource <span data-dropdown="drop"></span></a><br>
        <ul id="drop" class="f-dropdown" data-dropdown-content>
          <li><a href="{{ URL::to('resources/' . $value->id) }}">Show</a></li>
          <li><a href="{{ URL::to('resources/' . $value->id . '/edit') }}">Edit</a></li>
        </ul>
        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
        <!-- we will add this later since its a little more complicated than the other two buttons -->

      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@stop