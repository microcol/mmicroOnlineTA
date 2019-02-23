@extends('users.layouts')

@section('content')


<script>
  
  $(document).ready(function() {
      $('#library').DataTable();
    });

</script>


<!-- LIBRARY SECTION STARTS HERE -->


<section class="libraryArea">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="libraryAreaContent">
          <h1>Welcome To Online Library</h1>

          <table class="table table-striped display" id="library">
            <thead>
              <tr>
                <th scope="col">Book Name</th>
                <th scope="col">Department</th>
                <th scope="col">Download File</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>C</td>
                <td>CSE</td>
                <td>File Name</td>
              </tr>
              <tr>
                <td>Electrical Circuit</td>
                <td>EEE</td>
                <td>File Name</td>
              </tr>
              <tr>
                <td>Speaking English</td>
                <td>ENG</td>
                <td>File Name</td>
              </tr>
              <tr>
                <td>C</td>
                <td>CSE</td>
                <td>File Name</td>
              </tr>
              <tr>
                <td>Electrical Circuit</td>
                <td>EEE</td>
                <td>File Name</td>
              </tr>
              <tr>
                <td>Speaking English</td>
                <td>ENG</td>
                <td>File Name</td>
              </tr>
            </tbody>
          </table>



  </div>
</section>






<!-- LIBRARY SECTION ENDS HERE -->


@endsection