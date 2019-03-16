@extends('admins.panel')


@section('content')


	
	


<h1 style="text-align: center; padding: 15px;">{{ $getClassroomInfo->course_title }}</h1>

<div class="box-content">
		<form class="form-horizontal" action="/post_data_to_classroom" method="POST" enctype="multipart/form-data"> 
			@csrf  
			<fieldset>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Post to Classroom</label>
				<div class="controls">
				  <textarea name="post" style="height:200px; width:90%; resize:none" required></textarea>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Attach File</label>
				<div class="controls">
				  <input type="file" name="file">
				</div>
			  </div>
                <input type="hidden" name="user_id" value="{{ Sentinel::getUser()->id }}">
                <input type="hidden" name="classroom_id" value="{{ $getClassroomInfo->id }}">
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Post Now</button>
					
			  </div>
			</fieldset>
		  </form>
	
	</div>



@endsection