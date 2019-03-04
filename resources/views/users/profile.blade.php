@extends('users.layouts')

@section('content')


<!-- PROFILE SECTION STARTS HERE -->

<section class="profile">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="profileBox">
          <h1>Your Profile Information</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="profileImg">
                <!-- <img src="{{ asset('frontend/images/male.png') }}"> -->
                <img src="{{ asset('/uploads/images').'/'.$userInfo->photo }}">
              </div>
            </div>
            <div class="col-md-8">
              <div class="profileInfo">
                <table cellpadding="5px;">
                  <tr>
                    <th>NAME:</th>
                    <td>{{ $userInfo->full_name }}</td>
                  </tr>
                  <tr>
                    <th>ID:</th>
                    <td>{{ $userInfo->varsity_id }}</td>
                  </tr>
                  <tr>
                    <th>Department:</th>
                    <td>{{ $userInfo->department }}</td>
                  </tr>
                  <tr>
                    <th>PHONE:</th>
                    <td>{{ $userInfo->phone }}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- PROFILE SECTION ENDS HERE -->




<!-- MAIN CONTENT SECTION STARTS HERE -->

<section class="mainContent">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="blogNforum">
          <div class="bfContent">
          
<ul class="nav nav-tabs tabsCustomCss" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Recent Blog Posts</a>
  </li>
</ul>
<div class="tabsBgFixed">
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

  <a style="text-decoration: none; color: #000;" href="#">  
    <div class="blogPost">
      <div class="row">
        <div class="col-md-3">
          <div class="posterInfo">
            <div class="pIimage">
              <img src="images/male.png">
            </div>
            <h5>Name namename Name</h5>
          </div>
        </div>
        <div class="col-md-9">
          <div class="postContent">
            <h3>This is my first Question</h3>
            <p>
              Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis...
            </p>
            <hr style="border: 1px solid #000;">
            <ul>
              <li>
                <span><i class="far fa-clock"></i>4 Min</span>
              </li>
              <li>
                <span><i class="fas fa-comment"></i>45 Comments</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </a>
  <a style="text-decoration: none; color: #000;" href="#">  
    <div class="blogPost">
      <div class="row">
        <div class="col-md-3">
          <div class="posterInfo">
            <div class="pIimage">
              <img src="images/male.png">
            </div>
            <h5>Name namename Name</h5>
          </div>
        </div>
        <div class="col-md-9">
          <div class="postContent">
            <h3>This is my first Question</h3>
            <p>
              Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis...
            </p>
            <hr style="border: 1px solid #000;">
            <ul>
              <li>
                <span><i class="far fa-clock"></i>4 Min</span>
              </li>
              <li>
              <li>
                <span><i class="fas fa-comment"></i>45 Comments</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </a>
  <a style="text-decoration: none; color: #000;" href="#">  
    <div class="blogPost">
      <div class="row">
        <div class="col-md-3">
          <div class="posterInfo">
            <div class="pIimage">
              <img src="images/male.png">
            </div>
            <h5>Name namename Name</h5>
          </div>
        </div>
        <div class="col-md-9">
          <div class="postContent">
            <h3>This is my first Question</h3>
            <p>
              Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis...
            </p>
            <hr style="border: 1px solid #000;">
            <ul>
              <li>
                <span><i class="far fa-clock"></i>4 Min</span>
              </li>
              <li>
                <span><i class="fas fa-comment"></i>45 Comments</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </a>

  </div>

<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  

  <a style="text-decoration: none; color: #000;" href="#">  
    <div class="blogPost">
      <div class="row">
        <div class="col-md-3">
          <div class="posterInfo">
            <div class="pIimage">
              <img src="images/male.png">
            </div>
            <h5>Name namename Name</h5>
          </div>
        </div>
        <div class="col-md-9">
          <div class="postContent">
            <h3>This is my first Question</h3>
            <p>
              Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis...
            </p>
            <hr style="border: 1px solid #000;">
            <ul>
              <li>
                <span><i class="far fa-clock"></i>4 Min</span>
              </li>
              </li>
              <li>
                <span><i class="fas fa-comment"></i>45 Comments</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </a>
  <a style="text-decoration: none; color: #000;" href="#">  
    <div class="blogPost">
      <div class="row">
        <div class="col-md-3">
          <div class="posterInfo">
            <div class="pIimage">
              <img src="images/male.png">
            </div>
            <h5>Name namename Name</h5>
          </div>
        </div>
        <div class="col-md-9">
          <div class="postContent">
            <h3>This is my first Question</h3>
            <p>
              Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis...
            </p>
            <hr style="border: 1px solid #000;">
            <ul>
              <li>
                <span><i class="far fa-clock"></i>4 Min</span>
              </li>
              <li>
              <li>
                <span><i class="fas fa-comment"></i>45 Comments</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </a>
  <a style="text-decoration: none; color: #000;" href="#">  
    <div class="blogPost">
      <div class="row">
        <div class="col-md-3">
          <div class="posterInfo">
            <div class="pIimage">
              <img src="{{ asset('frontend/images/male.png') }}">
            </div>
            <h5>Name namename Name</h5>
          </div>
        </div>
        <div class="col-md-9">
          <div class="postContent">
            <h3>This is my first Question</h3>
            <p>
              Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis...
            </p>
            <hr style="border: 1px solid #000;">
            <ul>
              <li>
                <span><i class="far fa-clock"></i>4 Min</span>
              </li>
              <li>
              <li>
                <span><i class="fas fa-comment"></i>45 Comments</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </a>    



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