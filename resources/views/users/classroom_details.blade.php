@extends('users.layouts')

@section('content')


<section class="classroom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-12">
				<div class="classroomArea sidebar">
					<ul>
						<li>
							<div class="sidebarNav" style="background-color: #ff7361; min-height:70px;">
								
									<h3 style="text-transform:uppercase; color:#2f3239; font-weight:bold; margin-bottom:15px;">
										{{ $getClassroomInfo->course_title }}
									
								</a>
							</div>
						</li>
						<li>
							<div class="sidebarNav">
								<a href="#">
									<h3>View Classmates</h3>
								</a>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-9 col-xs-12">
				<div class="classroomArea">
					<div class="media">
					  <img class="mr-3" src="{{ asset('uploads/images').'/'.$getUserInfos[0]->photo }}">
					  <div class="media-body">
					  	<form action="/post_data_to_classroom" method="POST" enctype="multipart/form-data">
					  		<textarea class="postClass" name="post"></textarea>
					  		<input type="file" name="file" class="postClassBtn">
								<input type="hidden" name="user_id" value="{{ Sentinel::getUser()->id }}">
                <input type="hidden" name="classroom_id" value="{{ $getClassroomInfo->id }}">
					  		<input type="submit" name="" value="Post" class="postClassBtn" placeholder="Post here...">
					  	</form>
					  </div>
					</div>
					<div class="media">
					  <img class="mr-3" src="{{ asset('frontend/images/female.png') }}" alt="Generic placeholder image">
					  <div class="media-body">
					    <h5 class="mt-0">Media heading</h5>
					    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

					    <div class="media mt-3">
					      <a class="pr-3" href="#">
					        <img src="{{ asset('uploads/images').'/'.$getUserInfos[0]->photo }}">
					      </a>
					      <div class="media-body">
					        <form>
					  		<textarea class="postClass"></textarea>
					  		<input type="submit" name="" value="Comment" class="postClassBtn" placeholder="Post here...">
					  	</form>					      
					  </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


@endsection