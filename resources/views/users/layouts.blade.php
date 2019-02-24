<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.dataTables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/blog_post.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/forum.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/classroom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/classroom_details.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/library.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/blog.css') }}">
    
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>

    <title>Online TA</title>

  </head>


  <body>
      <!--Topnav starts here  -->
<section class="topnav">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="topnavLeft">
            <ul>
              <li data-toggle="modal" data-target="#logInModal">
                <a href="#">
                  <i class="fas fa-sign-in-alt"></i>LogIn
                </a>
              </li>
              <li data-toggle="modal" data-target="#signUpModal">
                <a href="#">
                  
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="topnavRight">
            <ul>
              <li>
                <a href="#">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fas fa-envelope"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-skype"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>


      <!--Topnav ends here  -->


  <nav class="navbar navbar-expand-lg navbar-light">
<div class="container">    
  <a class="navbar-brand logo" href="index.php">
    <img src="{{ URL::asset('frontend/images/logo.jpg') }}">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ '/' }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ '/blog' }}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ '/classroom' }}">Classroom</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ '/library' }}">Library</a>
      </li>
    </ul>
  </div>
 </div> 
</nav>





@yield('content')



<!-- FOOTER SECTION STARTS HERE -->

<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footerTxt">
          <h3>All rights reserved by- OnlineTA || 2018</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER SECTION ENDS HERE -->







<!-- LogIn Modal -->
<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LogIn Here...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form method="post" action="/student_login">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
      </div>
      <div class="modal-footer">
        <a href="{{ '/login' }}" style="font-size:12px; margin-right:77px;">
          Click here to Admin login
        </a>
        <button type="button" class="btn btn-secondary Reset" data-dismiss="modal">Reset Password</button>
        <button type="submit" class="btn btn-primary logIn">LogIn</button>
      </div>
  </form>    
    </div>
  </div>
</div>





<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fontawesome.min.js') }}"></script>
    
    <script src="{{ asset('frontend/js/jquery.dataTables.js') }}"></script>
    

  </body>
</html>
