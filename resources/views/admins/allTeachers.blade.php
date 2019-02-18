
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL TEACHERS LIST ARE HERE</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Varsity ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Department</th>
          <th scope="col">Phone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($teachers as $teacherInfo)

        <tr>
          <td>{{ $teacherInfo->varsity_id }}</td>
          <td>{{ $teacherInfo->full_name }}</td>
          <td>{{ $teacherInfo->email }}</td>
          <td>{{ $teacherInfo->department }}</td>
          <td>{{ $teacherInfo->phone }}</td>
          
          


          <td>
          <a href="">
            <button class="btn btn-primary" onclick="" data-toggle="modal" data-target="#exampleModal">EDIT</button>
          </a>
          <!-- <a href="{{  URL::to('deleteTeacher/'.$teacherInfo->id) }}">
            <button class="btn btn-danger">DELETE</button>
          </a> -->
          
        </td>


        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            
 
      



@endsection