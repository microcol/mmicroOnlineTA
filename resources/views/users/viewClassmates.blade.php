@extends('users.layouts')

@section('content')


<div class="container">

    <ul class="list-group" style="margin:50px;">


        @foreach($getClasswiseStudents as $enrolledStudents)

            <li class="list-group-item">
                <span>
                    <img style="height:50px; width:50px;" src="{{ asset('uploads/images').'/'.$enrolledStudents->photo }}">
                </span>
                <span style="margin-left: 50px;">
                    {{ $enrolledStudents->varsity_id }}
                </span>
                <span style="margin-left: 50px;">
                    {{ $enrolledStudents->full_name }}
                </span>
            </li>

        @endforeach

    </ul>

</div>


@endsection