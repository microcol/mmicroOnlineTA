@extends('admins.panel')


@section('content')


	
	


<h1 style="text-align: center; padding: 15px;">ADD NEW STUDENT</h1>

<div class="box-content">
		<form class="form-horizontal" action="/register" method="POST"> 
			@csrf  
			<fieldset>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">First Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="first_name" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Last Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="last_name" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Full Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="full_name" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Email</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="email" name="email" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Student ID</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="varsity_id" required>
				</div>
			  </div>	
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Phone Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="phone" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Department Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="department" required>
			    </div>
			  </div>
			   <div class="control-group">
				<label class="control-label" for="focusedInput">Password</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="password" name="password" required>
			   </div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Photo</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="file" name="photo">
			   </div>
			  </div>    
			  <input type="hidden" name="user_type" value="student">
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Add Student</button>
					
			  </div>
			</fieldset>
		  </form>
	
	</div>



@endsection