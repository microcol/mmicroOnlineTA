<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
  
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>OnlineTA</title>
  <meta name="description" content="Metro Admin Template.">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: CSS -->
  <link id="bootstrap-style" href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
  <link id="base-style" href="{{ asset('backend/css/datatables.css') }}" rel="stylesheet">
  <link id="base-style" href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
  <link id="base-style-responsive" href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  <!-- end: CSS -->
  

  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
  <![endif]-->
  
  <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
  <![endif]-->
    
  <!-- start: Favicon -->
  <link rel="shortcut icon" href="{{ URL::to('backend/img/favicon.ico') }}">
  <!-- end: Favicon -->
  
  <script src="{{ asset('backend/js/datatables.js') }}"></script>

  <script>
  
  $(document).ready( function () {
      $('#datatable').DataTable();
        
    });

</script>
    
    
    
</head>

<body>
    <!-- start: Header -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html"><span>OnlineTA Dashboard</span></a>
                
        <!-- start: Header Menu -->
        <div class="nav-no-collapse header-nav">
          <ul class="nav pull-right">
            
            
            <!-- end: Notifications Dropdown -->
            
            <!-- end: Message Dropdown -->
            <li>
              @if(Sentinel::check())
                {{ Sentinel::getUser()->full_name }}
              @endif 
            </li>
            <li style="padding-top: 10px;
            box-sizing: border-box;"></li>
            <!-- start: User Dropdown -->
            <li class="dropdown">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white user"></i> 
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-menu-title">
                  <span>Account Settings</span>
                </li>
                <li><a href="#">Profile</li>
                <li>

                  <form action="/logout" method="POST" id="logoutForm">
                    @csrf
                    <a href="#" style="text-decoration: none;" onclick="document.getElementById('logoutForm').submit()">Logout</a>
                  </form>
                  
                </li>
                

                
              </ul>
            </li>
            <!-- end: User Dropdown -->
          </ul>
        </div>
        <!-- end: Header Menu -->
        
      </div>
    </div>
  </div>
  <!-- start: Header -->
  
    <div class="container-fluid-full">
    <div class="row-fluid">
        
      <!-- start: Main Menu -->
      <div id="sidebar-left" class="span2" style="min-height: 700px;">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{ URL::to('employeeRegister') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet">Add Teacher</span></a></li> 
            <li><a href="{{ URL::to('studentRegister') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet">Add Student</span></a></li>
            <li><a href="{{ URL::to('allTeachers') }}"><i class="icon-envelope"></i><span class="hidden-tablet">All Teachers</span></a></li>
            <li><a href="{{ URL::to('allStudents') }}"><i class="icon-envelope"></i><span class="hidden-tablet">All Students</span></a></li>
            <li><a href="{{ URL::to('') }}"><i class="icon-envelope"></i><span class="hidden-tablet">Post Notices</span></a></li>
            <li><a href="{{ URL::to('') }}"><i class="icon-envelope"></i><span class="hidden-tablet">Library</span></a></li>

            
          </ul>
        </div>
      </div>
      <!-- end: Main Menu -->
      
      <!-- <noscript>
        <div class="alert alert-block span10">
          <h4 class="alert-heading">Warning!</h4>
          <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
      </noscript> -->
      
<div class="formBox" style="min-height: 400px; width: 76%; margin: 0 auto; margin-bottom: 50px; margin-left: 252px;">

     @yield('content')

</div>     
  
  <footer>

    <p>
      <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
      <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">OnlineTA || 2018</a></span>
    </p>

  </footer>
  
  <!-- start: JavaScript-->

    <script src="{{ asset('backend/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-migrate-1.0.0.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.ui.touch-punch.js') }}"></script>
  
    <script src="{{ asset('backend/js/modernizr.js') }}"></script>
  
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.cookie.js') }}"></script>
  
    <script src='{{ asset('backend/js/fullcalendar.min.js') }}'></script>
  
    <script src='{{ asset('backend/js/jquery.dataTables.min.js') }}'></script>

    <script src="{{ asset('backend/js/excanvas.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.resize.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.chosen.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.uniform.min.js') }}"></script>
    
    <script src="{{ asset('backend/js/jquery.cleditor.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.noty.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.elfinder.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.raty.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.iphone.toggle.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.uploadify-3.1.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.gritter.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.imagesloaded.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.masonry.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.knob.modified.js') }}"></script>
  
    <script src="{{ asset('backend/js/jquery.sparkline.min.js') }}"></script>
  
    <script src="{{ asset('backend/js/counter.js') }}"></script>
  
    <script src="{{ asset('backend/js/retina.js') }}"></script>

    <script src="{{ asset('backend/js/custom.js') }}"></script>

    <script src="{{ asset('backend/js/custom.js') }}"></script>

    
   
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


  <!-- end: JavaScript-->




<script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

  
    switch(type){
      case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>



  
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
