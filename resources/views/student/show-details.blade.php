@extends("layouts.app")
@section("content")
<div class="card">
  <div class="card-header">
    <h1>Profile: <a href="\show-list\{{$student->id}}">{{$student->name}}</a></h1>
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <tr>
        <th>Name:</th>
        <td>{{$student->name}}</td>
      </tr>
      <tr>
        <th>email:</th>
        <td>{{$student->email}}</td>
      </tr>
      <tr>
        <th>Class:</th>
        <td>{{$student->class}}</td>
      </tr>
      <tr>
        <th>Roll:</th>
        <td>{{$student->roll}}</td>
      </tr>
      <tr>
        <th>Section:</th>
        <td>{{$student->section}}</td>
      </tr>
    </table>
    <a href="/show-list/{{$student->id}}/edit">
      <button type="button" name="button" class="btn btn-primary btn-lg mr-2">Edit</button>
    </a>
    <a href="/show-list/{{$student->id}}/delete">
      <button type="button" name="button" class="btn btn-danger btn-lg mr-2">delete</button>
    </a>
  </div>
</div>
@endsection
