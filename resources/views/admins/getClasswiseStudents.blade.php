
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px; text-transform:uppercase;">ALL ENROLLED STUDENTS IN {{ $getClasswiseStudents[0]->course_title }}</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Students Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach( $getClasswiseStudents as $classwiseStudentsInfo )

        <tr>
          <td>{{ $classwiseStudentsInfo->full_name }}</td>
          <td>
            <a href="#">
                <button class="btn btn-danger">Delete</button>
            </a>
          </td>
          
        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            



@endsection