
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px; text-transform:uppercase;">ALL ENROLLED STUDENTS IN <strong>{{ $getClasswiseStudents[0]->course_title }}<strong></h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach( $getClasswiseStudents as $classwiseStudentsInfo )

        <tr>
          <td>{{ $classwiseStudentsInfo->varsity_id }}</td>
          <td>{{ $classwiseStudentsInfo->full_name }}</td>
          <td>{{ $classwiseStudentsInfo->email }}</td>
          <td>
            <img src="{{ asset('uploads/images').'/'.$classwiseStudentsInfo->photo }}"  style="height:50px; width:50px;">
          </td>
          <td>
            <a href="delete_enrolled_student/{{ $classwiseStudentsInfo->student_id }}">
                <button class="btn btn-danger">Delete</button>
            </a>
          </td>
          
        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            



@endsection