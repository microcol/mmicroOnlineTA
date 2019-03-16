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


								<form action="enroll_course/" method="post" class="joinClass">
								@csrf
									<input type="text" name="validate_classroom_code" placeholder="Join Classroom">
									<input type="hidden" name="student_id" value="{{ Sentinel::getUser()->id }}">
									<input type="submit" value="Join">
								</form>


							</div>
						</li>
						
					</ul>
				</div>
			</div>

		@foreach($displayRegisteredsClassroooms as $enrolledStudents)

			<div class="col-md-3">
				<div class="classroomArea">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="{{ asset('frontend/images/classroom.jpg') }}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title" style="text-transform: uppercase;">
								{{ $enrolledStudents->course_code }}
								</h5>
					    <p>{{ $enrolledStudents->course_title }}</p>
					    <a href="classroom_details/{{ $enrolledStudents->classroom_id }}" class="btn btn-primary goToClass">
					    	View Classroom
					    </a>
					  </div>
					</div>
				</div>
			</div>

		@endforeach

			

		</div>
	</div>
</section>


@endsection