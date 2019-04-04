
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL ADMINS LIST ARE HERE</h1>


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

        @foreach($admins as $adminInfo)

        <tr>
          <td>{{ $adminInfo->varsity_id }}</td>
          <td>{{ $adminInfo->full_name }}</td>
          <td>{{ $adminInfo->email }}</td>
          <td>{{ $adminInfo->department }}</td>
          <td>{{ $adminInfo->phone }}</td>
          
          


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