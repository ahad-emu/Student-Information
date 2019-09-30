@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
          <div class="card">
            <div class="card-header">
              <h1>Student Information</h1>
            </div>
            <div class="card-body">
              A student is primarily a person enrolled in a school or other educational institution who
              attends classes in a course to attain the appropriate level of mastery of a subject under the guidance of an instructor and who
              devotes time outside class to do whatever activities the instructor assigns that are necessary either for class preparation or to submit evidence of progress towards that mastery.
              In the broader sense, a student is anyone who applies themselves to the intensive intellectual engagement with some matter necessary to master it as part of some practical affair in which such mastery is basic or decisive.
            </div>
          </div>

        </div>
    </body>
</html>
@endsection()
