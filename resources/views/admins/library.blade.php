@extends('admins.panel')


@section('content')


	

<h1 style="text-align: center; padding: 15px;">ADD BOOK TO LIBRARY</h1>

<div class="box-content">
		<form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data"> 
			@csrf  
			<fieldset>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Book title</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="title" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Department</label>
				<div class="controls">
                <select>
                @foreach($courseInfo as $courseCode)
                    <option valuse="{{ $courseCode->id }}">{{ $courseCode->course_code }}</option>
                @endforeach
                </select>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Book</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="file" name="image" required>
			   </div>
			  </div>    
			  <input type="hidden" name="user_type" value="employee">
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Upload to Library</button>
					
			  </div>
			</fieldset>
		  </form>
	
	</div>    




@endsection