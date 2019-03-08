
@extends('admins.panel')


@section('content')

  

<h3  style="margin:20px 0 20px 0;">
    Posted By- {{ $singleBlog->full_name }} ||  
    Posted On- {{ date('d/m/Y', strtotime($singleBlog->created_at)) }} 
</h3>


<p>
    {{ $singleBlog->post }}
</P>
            
            



@endsection