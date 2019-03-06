
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL LIBRARY BOOKS LIST ARE HERE</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Notice Title</th>
          <th scope="col">Description</th>
          <th scope="col">Department</th>
          <th scope="col">Posted On</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach( $notices as $notice )

        <tr>
          <td>{{ $notice->notice_title }}</td>
          <td>{{ str_limit( $notice->description, $limit = 150, $end = '...') }}</td>
          <td>{{ $notice->department }}</td>
          <td>{{ $notice->created_at->format('d/m/Y') }}</td>
          <td>
            <a href="view-notice/{{ $notice->id }}">
                <button class="btn btn-primary">View</button>
            </a>
            <a href="{{ asset('/uploads/library').'/'.$notice->file }}">
                <button class="btn btn-primary">Download</button>
            </a>
          </td>
          
        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            



@endsection