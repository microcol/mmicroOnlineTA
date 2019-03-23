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
							@csrf
					  		<textarea class="postClass" name="post"></textarea>
					  		<input type="file" name="file" class="postClassBtn">
								<input type="hidden" name="user_id" value="{{ Sentinel::getUser()->id }}">
                <input type="hidden" name="classroom_id" value="{{ $getClassroomInfo->id }}">
					  		<input type="submit" name="" value="Post" class="postClassBtn" placeholder="Post here...">
					  	</form>
					  </div>
					</div>
					
				@foreach($classroomAllPosts as $individualPost)	


					<div class="media" style=" border:2px solid #ff7361; border-bottom:none;">
					  <img class="mr-3" src="{{ asset('uploads/images').'/'.$individualPost->photo }}">
					  <div class="media-body">
					    <h5 class="mt-0" style="text-transform:uppercase;">{{ $individualPost->full_name }}</h5>
								<p style="font-size:13px;">
									{{ Carbon\Carbon::parse($individualPost->created_at)->diffForHumans() }}
								</p>
								<p style="margin: 15px 0 15px 0;">
									{{ $individualPost->post }}
								</p>
								<a href="{{ asset('uploads/library').'/'.$individualPost->file }}" target="_blank">
									{{ $individualPost->file }}
								</a>
					    </div>
					  </div>
						<hr>



						@foreach($getClassroomsComment as $comment)


							@if ($comment->classroompost_id == $individualPost->id)


							<div class="media" style="margin-top:-15px; border-top:none;">
									<a class="pr-3" href="#">
										<img src="{{ asset('uploads/images'.'/'.$comment->photo) }}">
									</a>
									<div class="media-body">
										<h5 class="mt-0" style="text-transform:uppercase;">{{ $comment->full_name }}</h5>
										<p style="font-size:13px;">
										{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
										</p>
										<p style="margin: 15px 0 15px 0;">
											{{ $comment->comment }}
										</p>  				      
									</div>
							</div>
							@endif

						@endforeach

						<div class="media" style="margin-top:-15px; border-top:none;">
									<a class="pr-3" href="#">
										<img src="{{ asset('uploads/images'.'/'.$getUserInfos[0]->photo) }}">
									</a>
									<div class="media-body">
									<form action="{{ route('post_classroom_comment') }}" method="post">
									@csrf
									<textarea class="postClass" name="comment"></textarea>
									<input type="hidden" name="user_id" value="">
									<input type="hidden" name="classroompost_id" value="">
									<input type="submit" value="Reply" class="postClassBtn">
								</form>					      
							</div>
						</div>


@endforeach





				</div>
			</div>
			
		</div>
	</div>
</section>


@endsection