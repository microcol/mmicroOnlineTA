@extends('users.layouts')

@section('content')


<section class="classroom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-12">
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
					  	<form>
					  		<textarea class="postClass"></textarea>
					  		<input type="file" name="" class="postClassBtn">
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
					        <img src="{{ asset('frontend/images/male.png') }}" alt="Generic placeholder image">
					      </a>
					      <div class="media-body">
					        <h5 class="mt-0">Media heading</h5>
						    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.			      
						  </div>
					    </div>

					    <div class="media mt-3">
					      <a class="pr-3" href="#">
					        <img src="{{ asset('frontend/images/female.png') }}" alt="Generic placeholder image">
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