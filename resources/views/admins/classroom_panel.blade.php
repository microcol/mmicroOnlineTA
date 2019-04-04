
@extends('admins.panel')


@section('content')

              
<div style="margin:30px;">



<form class="form" action="/create-department" method="post">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="department" placeholder="Add New Department" required>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Add Department</button>
</form>



  

<h1 style="text-align: center; padding: 15px;">ALL DEPARTMENTS LIST ARE HERE</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Department Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($courseInfo as $deptInfo)

        <tr>
          <td>{{ $deptInfo->department }}</td>

          <td>
          <a href="/edit_dept/{{$deptInfo->id}}">
            <button class="btn btn-primary">Update Department</button>
          </a>
          <a href="/delete_dept/{{$deptInfo->id}}">
            <button class="btn btn-danger">DELETE</button>
          </a>
          
        </td>


        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            
 
      




<!-- <form class="form" action="/update-department/{{ $courseInfo[0]->id }}" method="post">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="department" placeholder="Add New Department">
  </div>
  <select name="department">
    <option>---</option>
    @foreach($courseInfo as $courseDept)
      <a href="/edit_department/{{ $courseDept->id }}">
        <option value="{{ $courseDept->id }}">{{ $courseDept->department }}</option>
      </a>
    @endforeach
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
</form> -->





</div>
       



@endsection