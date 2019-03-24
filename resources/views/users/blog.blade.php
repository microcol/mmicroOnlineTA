@extends('users.layouts')

@section('content')


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

        <div class="blogHeading">
        	<h1 class="my-4">Blogs</h1>
        </div>


        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Post Your Blog Here...</h5>
          <div class="card-body">
            <form action="post-blog/" method="post">
            @csrf
              <div class="form-group">
                <textarea class="form-control" rows="3" name="post"></textarea>
              </div>
              <input type="hidden" name="user_id" value="{{ Sentinel::getUser()->id }}">
              <button type="submit" class="btn btn-primary">Post Now</button>
            </form>
          </div>
        </div>



        <!-- Blog Post -->

      @foreach($viewBlogs as $viewBlog)

        <div class="card mb-4">
          <div class="card-body">
            <!-- <h2 class="card-title">Post Title</h2> -->
            <p class="card-text">
              {{ $viewBlog->post }}
            </p>
            <a href="single_blog_post/{{ $viewBlog->id}}/" class="btn btn-primary readMore">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted postedBy">
            Posted on {{ date('d/m/Y', strtotime($viewBlog->created_at)) }} ||
            {{ Carbon\Carbon::parse($viewBlog->created_at)->diffForHumans() }} || by
            <a href="#">{{ $viewBlog->full_name }}</a>
          </div>
        </div>

      @endforeach  

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column Start -->



      <!-- Sidebar Widgets Column End -->
      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


@endsection