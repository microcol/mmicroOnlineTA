
@extends('admins.panel')


@section('content')

              
<div style="margin:30px;">



<form class="form">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="inputPassword2" placeholder="Add New Course Title">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="inputPassword2" placeholder="Add Course Code">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>



<form class="form">
  <div class="form-group mx-sm-3 mb-2">
    <select>
        <option>CSE111</option>
        <option>CSE311</option>
        <option>CSE131</option>
        <option>CSE143</option>
    </select>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="inputPassword2" placeholder="Generate Classroom Code" readonly>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Generate</button>
  <button type="button" class="btn btn-primary mb-2">Save</button>
  <button type="button" class="btn btn-primary mb-2">Copy</button>
</form>




</div>
       



@endsection