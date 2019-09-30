<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class AboutStudent extends Controller
{
    public function display(){
      return view("student.display")->with("students", Student::all());
    }

    public function create(){
      return view("student.create-list");
    }

    public function store(){
      $data = request() -> all();

      $student = new Student();

      $student->name = $data["name"];
      $student->class = $data["class"];
      $student->roll = $data["roll"];
      $student->section = $data["section"];
      $student->email = $data["email"];
      $student -> save();

      return redirect("/show-list");

     }

     public function show($studentId){
       return view("student.show-details")->with("student", Student::find($studentId));
     }

     public function edit($studentId){

       $student = Student::find($studentId);
       return view("student.edit")->with("student", $student);

      }

      public function update($studentId){
        $data = request() -> all();

        $student = Student::find($studentId);

        $student->name = $data["name"];
        $student->class = $data["class"];
        $student->roll = $data["roll"];
        $student->section = $data["section"];
        $student->email = $data["email"];
        $student -> save();

        return redirect("/show-list");

       }

       public function delete($studentId){
         $student = Student::find($studentId);

         $student -> delete();

         return redirect("/show-list");
       }
}
