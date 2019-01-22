
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL STUDENTS LIST ARE HERE</h1>


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

        @foreach($students as $studentInfo)

        <tr>
          <td>{{ $studentInfo->varsity_id }}</td>
          <td>{{ $studentInfo->full_name }}</td>
          <td>{{ $studentInfo->email }}</td>
          <td>{{ $studentInfo->department }}</td>
          <td>{{ $studentInfo->phone }}</td>
          
          


          <td>
          <a href="">
            <button class="btn btn-primary" onclick="" data-toggle="modal" data-target="#exampleModal">EDIT</button>
          </a>
          <a href="">
            <button class="btn btn-danger">DELETE</button>
          </a>
          
        </td>


        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            
 
      



@endsection