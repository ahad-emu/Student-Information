@extends("layouts.app")
@section("content")
<div class="card">
  <div class="card-header">
    <h1>Edit Student List</h1>
  </div>
  <div class="card-body">
      <form action="/show-list/{{$student->id}}/update" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name :</label>
          <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
          <label for="class">Class :</label>
          <input type="name" class="form-control" id="class" placeholder="Enter Your class" name="class" value="{{$student->class}}">
        </div>
        <div class="form-group">
          <label for="section">Section :</label>
          <input type="text" class="form-control" id="section" placeholder="Enter Your Section" name="section" value="{{$student->section}}">
        </div>
        <div class="form-group">
          <label for="roll">Roll No :</label>
          <input type="number" class="form-control" id="roll" placeholder="Enter Your Roll" name="roll" value="{{$student->roll}}">
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$student->email}}">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Update</button>
      </form>
  </div>
</div>
@endsection
