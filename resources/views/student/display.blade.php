@extends("layouts.app")
@section("content")
<div class="card">
  <div class="card-header">
    <h1>Display Student Information</h1>
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
        <th>Roll</th>
        <th>Section</th>
        <th>email</th>
      </tr>
      @foreach($students as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td><a href="show-list/{{$item->id}}">{{$item->name}}</a></td>
        <td>{{$item->class}}</td>
        <td>{{$item->roll}}</td>
        <td>{{$item->section}}</td>
        <td>{{$item->email}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
