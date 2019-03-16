
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL CLASSROOMS LIST ARE HERE</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Department</th>
          <th scope="col">Course Title</th>
          <th scope="col">Course Code</th>
          <th scope="col">Classroom Code</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        
    @foreach($viewClassrooms as $ClassroomInfo)
        <tr>
          <td>{{ $ClassroomInfo->department }}</td>
          <td>{{ $ClassroomInfo->course_title }}</td>
          <td>{{ $ClassroomInfo->course_code }}</td>
          <td>{{ $ClassroomInfo->classroom_code }}</td>
          <td>
            <a href="post_to_classroom/{{ $ClassroomInfo->id }}">
                <button class="btn btn-primary">View</button>
            </a>
            <a href="delete_classroom/{{ $ClassroomInfo->id }}" onclick="return confirm('Are you sure you want to delete this Classroom?');">
                <button class="btn btn-danger">Delete</button>
            </a>
          </td>
        </tr>

    @endforeach
    
        
      </tbody>
    </table>
            
            



@endsection