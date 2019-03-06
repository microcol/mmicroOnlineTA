@extends('admins.panel')


@section('content')


	
	


<h1 style="text-align: center; padding: 15px;">ADD NEW NOTICE</h1>

<div class="box-content">
		<form class="form-horizontal" action="post-notice/" method="POST" enctype="multipart/form-data"> 
			@csrf  
			<fieldset>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Notice Title</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="notice_title" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Department</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="department" required>
				</div>
			  </div>
              <div class="control-group">
				<label class="control-label" for="focusedInput">Description</label>
				<div class="controls">
                <textarea style="min-height:200px; width:80%; resize:none" 
                    class="input-xlarge focused" id="focusedInput" type="text" name="description" required>
                </textarea>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Attachment</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="file" name="file" required>
			   </div>
			  </div>    
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Post Now</button>
					
			  </div>
			</fieldset>
		  </form>
	
	</div>



@endsection