@extends('users.layouts')

@section('content')


<section class="classroom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="classroomArea sidebar">
					<ul>
						<li>
							<div class="sidebarNav">
								<a href="{{ '/classroom' }}">
									<h3>All Classes</h3>
								</a>
							</div>
						</li>
						<li>
							<div class="sidebarNav">
								<form action="#" class="joinClass">
									<input type="text" name="" placeholder="Join Classroom">
									<input type="submit" name="" value="Join">
								</form>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="classroomArea">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="{{ asset('frontend/images/classroom.jpg') }}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">CSE 112</h5>
					    <p>Problem Solving</p>
					    <a href="{{ '/classroom_details' }}" class="btn btn-primary goToClass">
					    	View Classroom
					    </a>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="classroomArea">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="{{ asset('frontend/images/classroom.jpg') }}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">CSE 112</h5>
					    <p>Problem Solving</p>
					    <a href="{{ '/classroom_details' }}" class="btn btn-primary goToClass">
					    	View Classroom
					    </a>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="classroomArea">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="{{ asset('frontend/images/classroom.jpg') }}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">CSE 112</h5>
					    <p>Problem Solving</p>
					    <a href="{{ '/classroom_details' }}" class="btn btn-primary goToClass">
					    	View Classroom
					    </a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection