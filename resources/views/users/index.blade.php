@extends('users.layouts')

@section('content')


<!-- BANNER SECTION STARTS HERE -->

<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="bannerTxt">
          <h1>Welcome To Online<br><span>TEACHER ASSISTANT</span></h1>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- BANNER SECTION ENDS HERE -->




<!-- MAIN CONTENT SECTION STARTS HERE -->

<section class="mainContent">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="notice">
          <div class="bfContent">
          
<ul class="nav nav-tabs tabsCustomCss" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">NOTICE BOARD</a>
  </li>
</ul>
<div class="tabsBgFixed">
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Title</th>
      <th scope="col">Updated On</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Demo notice for check something...</td>
      <td>14/11/2018</td>
      <td>CSE</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>What is Lorem Ipsum?</td>
      <td>17/11/2018</td>
      <td>EEE</td>
    </tr>
    <tr><tr>
      <th scope="row">3</th>
      <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
      <td>14/10/2018</td>
      <td>BBA</td>
    </tr>
    <tr><tr>
      <th scope="row">4</th>
      <td>Demo notice for check something...</td>
      <td>14/09/2018</td>
      <td>ETE</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Demo notice for check something...</td>
      <td>14/11/2018</td>
      <td>CSE</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>What is Lorem Ipsum?</td>
      <td>17/11/2018</td>
      <td>EEE</td>
    </tr>
    <tr><tr>
      <th scope="row">3</th>
      <td>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</td>
      <td>14/10/2018</td>
      <td>BBA</td>
    </tr>
    <tr><tr>
      <th scope="row">4</th>
      <td>Demo notice for check something...</td>
      <td>14/09/2018</td>
      <td>ETE</td>
    </tr>
  </tbody>
</table>

  </div>

</div>
</div>
    </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="sideBar">
          <h1>STATS</h1>
          <hr class="sideBarHr">
          <div class="sideBarStatBox">
            <h3><i class="fas fa-users"></i>USERS (345)</h3>
          </div>
          <div class="sideBarStatBox">
            <h3><i class="fas fa-chalkboard"></i>BLOG POSTS (345)</h3>
          </div>
          <div class="sideBarStatBox">
            <h3><i class="fas fa-exclamation-circle"></i>FORUM POSTS (345)</h3>
          </div>
          <div class="sideBarStatBox">
            <h3><i class="fas fa-book-reader"></i>BOOKS (345)</h3>
          </div>
          <div class="sideBarStatBox">
            <h3><i class="fas fa-chalkboard-teacher"></i>CLASSROOMS (345)</h3>
          </div>
          <div class="sideBarStatBox">
            <h3><i class="fas fa-user-graduate"></i>ENROLLED STUDENTS (345)</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- MAIN CONTENT SECTION ENDS HERE -->


@endsection