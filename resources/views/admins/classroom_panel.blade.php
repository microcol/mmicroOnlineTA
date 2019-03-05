
@extends('admins.panel')


@section('content')

              
<div style="margin:30px;">



<form class="form" action="/create-department" method="post">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="department" placeholder="Add New Department">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="course_title" placeholder="Add New Course Title">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="course_code" placeholder="Add Course Code">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>



<form class="form">
  <div class="form-group mx-sm-3 mb-2">
    <select>
    @foreach($courseInfo as $courseCode)
        <option valuse="{{ $courseCode->id }}">{{ $courseCode->course_code }}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="inputPassword2" placeholder="Generate Classroom Code" readonly>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Generate</button>
  <button type="button" class="btn btn-primary mb-2">Save</button>
  <button type="button" class="btn btn-primary mb-2">Copy</button>
</form>




</div>
       



@endsection