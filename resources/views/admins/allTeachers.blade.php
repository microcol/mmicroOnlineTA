
@extends('admins.panel')


@section('content')

  

<h1 style="text-align: center; padding: 15px;">ALL TEACHERS LIST ARE HERE</h1>


    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">Varsity ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Department</th>
          <th scope="col">Phone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($teachers as $teacherInfo)

        <tr>
          <td id="varsity_id_{{ $teacherInfo->id }}">{{ $teacherInfo->varsity_id }}</td>
          <td id="first_name_{{ $teacherInfo->id }}" style="display:none;">{{ $teacherInfo->first_name }}</td>
          <td id="last_name_{{ $teacherInfo->id }}" style="display:none;">{{ $teacherInfo->last_name }}</td>
          <td id="full_name_{{ $teacherInfo->id }}">{{ $teacherInfo->full_name }}</td>
          <td id="email_{{ $teacherInfo->id }}">{{ $teacherInfo->email }}</td>
          <td id="department_{{ $teacherInfo->id }}">{{ $teacherInfo->department }}</td>
          <td id="phone_{{ $teacherInfo->id }}">{{ $teacherInfo->phone }}</td>
          <td id="password_{{ $teacherInfo->id }}" style="display:none;">{{ $teacherInfo->password }}</td>
          <td id="photo_{{ $teacherInfo->id }}" style="display:none;">{{ $teacherInfo->photo }}</td>
          
          


          <td>
          <a href="">
            <button class="btn btn-primary" onclick="edit({{ $teacherInfo->id }})" data-toggle="modal" data-target="#exampleModal">EDIT</button>
          </a>
          <!-- <a href="{{  URL::to('deleteTeacher/'.$teacherInfo->id) }}">
            <button class="btn btn-danger">DELETE</button>
          </a> -->
          
        </td>


        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            
 
      

<!-- Modal -->


<form action="update_data/{{ $teacherInfo->id }}/" method="post" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding-left:120px; box-sizing:border-box;">
      <fieldset>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">First Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_first_name" type="text" name="first_name" required value="{{ $teacherInfo->first_name }}">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Last Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_last_name" type="text" name="last_name" required value="{{ $teacherInfo->last_name }}">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Full Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_full_name" type="text" name="full_name" required value="{{ $teacherInfo->full_name }}">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Email</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_email" type="email" name="email" readonly required value="{{ $teacherInfo->email }}">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Emloyee ID</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_varsity_id" type="text" name="varsity_id" readonly required value="{{ $teacherInfo->varsity_id }}">
				</div>
			  </div>	
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Phone Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_phone" type="text" name="phone" required value="{{ $teacherInfo->phone }}">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Department Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_department" type="text" name="department" readonly required value="{{ $teacherInfo->department }}">
			    </div>
			  </div>
			   <div class="control-group">
				<!-- <label class="control-label" for="focusedInput">Password</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_password" type="password" name="password"  value="{{ $teacherInfo->password }}">
			   </div>
			  </div> -->
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Photo</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="edit_image" type="file" name="image" required value="{{ $teacherInfo->image }}">
			   </div>
			  </div>    
			  <input type="hidden" name="user_type" value="employee">
			</fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

</form>




<script>


  function edit(id) {

    $("#edit_first_name").val($("#first_name_"+id).html());
    $("#edit_last_name").val($("#last_name_"+id).html());
    $("#edit_full_name").val($("#full_name_"+id).html());
    $("#edit_email").val($("#email_"+id).html());
    $("#edit_department").val($("#department_"+id).html());
    $("#edit_phone").val($("#phone_"+id).html());
    $("#edit_password").val($("#password_"+id).html());
    $("#edit_photo").val($("#photo_"+id).html());
    $("#agent_id").val(id);

  }


</script>
      



@endsection