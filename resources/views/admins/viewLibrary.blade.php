
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL LIBRARY BOOKS LIST ARE HERE</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Book Title</th>
          <th scope="col">Course Code</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($viewBooks as $viewBook)

        <tr>
          <td>{{ $viewBook->book_title }}</td>
          <td>{{ $viewBook->course_code }}</td>
          <td>
            <a href="{{ asset('/uploads/library').'/'.$viewBook->file }}">
                <button class="btn btn-primary">Download</button>
            </a>
          </td>
        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            



@endsection