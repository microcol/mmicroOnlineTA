
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL BLOGS ARE HERE</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Blogs</th>
          <th scope="col">Posted On</th>
          <th scope="col">Posted By</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach( $viewBlogs as $viewBlog )

        <tr>
          <td>{{ str_limit( $viewBlog->post, $limit = 150, $end = '...') }}</td>
          <td>{{ date('d/m/Y', strtotime($viewBlog->created_at)) }}</td>
          <td>{{ $viewBlog->full_name }}</td>
          <td>
            <a href="view-single-blog/{{ $viewBlog->id }}/">
                <button class="btn btn-primary">View</button>
            </a>
          </td>
          
        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            



@endsection