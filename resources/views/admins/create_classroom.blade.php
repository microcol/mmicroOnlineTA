
@extends('admins.panel')


@section('content')

              
<div style="margin:30px;">


            
            
 
      




<form class="form" action="/create_classroom/" method="post">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="department" value="{{ $dept->department }}" readonly>
  </div>
  </select>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="course_title" placeholder="Add New Course Title">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="course_code" placeholder="Add Course Code">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="hidden" class="form-control" name="classroom_code" value="{{ $generateClassroomCode }}" placeholder="Generate Classroom Code" readonly>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>





</div>
       



@endsection